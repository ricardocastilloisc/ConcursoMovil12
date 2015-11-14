<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests\AnimalRequest;
use ConcursoMovil12\Http\Requests\AnimalUpdateRequest;

use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Controllers\Controller;
use ConcursoMovil12\Razas;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->beforeFilter('@find',['only' =>['edit','update','destroy']]);    
    }
    public function find(Route $route)
    {
        $this->animales = Animales::find($route->getParameter('animal')); 
    }
    public function index(Request $request)
    {
        $animales = Animales::Animaless();

        $razas = Razas::lists('nombre', 'id'); 
        if($request->ajax())
        {
            return response()->json(view('animales.index', compact('animales','razas'))->render());
        }
        return view('animales.index',compact('animales','razas'));
        //
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $razas = Razas::lists('nombre', 'id');
        return view('animales.create', compact('razas'));
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request)
    {
        Animales::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        return Redirect::to('/animal');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         return view('animales.show');

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $razas = Razas::lists('nombre', 'id');
        return view('animales.edit',['animales'=>$this->animales,'razas'=>$razas]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalUpdateRequest $request, $id)
    {

        $this->animales->fill($request->all());
        $this->animales->save();

        Session::flash('message','Animal Editado Correctamente');
        return Redirect::to('/animal');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->animales->delete();
        Session::flash('message','Animal Eliminada Correctamente');
        return Redirect::to('/animal');
        //
    }
}