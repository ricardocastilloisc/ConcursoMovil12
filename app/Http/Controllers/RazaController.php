<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;

use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Controllers\Controller;

use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Razas;


use ConcursoMovil12\Http\Requests\RazaRequest;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //buscamos los datos para no solictarlo cada rato en 
        //en donde esta los edit y demas en el arreglos son las
        //funciones donde se haran las modificaciones
        $this->beforeFilter('@find',['only' =>['edit','update','destroy']]);    
    }
    public function find(Route $route)
    {
        //funcion para buscar
        $this->raza = Razas::find($route->getParameter('raza')); 
    }
    public function index(Request $request)
    {
        //busco los datos de las razas y se compagina
        $razas = Razas::paginate(4); 
        //si se ejecuto el ajax vuelve hacer la insturccion
        if($request->ajax())
        {
            return response()->json(view('raza.razas', compact('razas'))->render());
        }
        //enviamos la variable osea todos los datos se van a la vista
        return view('raza.index',compact('razas'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redireccionamos a la vista llamada create que esta en la carpeta 
        return view('raza.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RazaRequest $request)
    {
        Razas::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        return Redirect::to('/raza');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('raza.edit',['raza'=>$this->raza]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        //
    }
}
