<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Destete;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Requests\DesteteRequest;
use ConcursoMovil12\Http\Controllers\Controller;

class DesteteController extends Controller
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
        $this->destete = Destete::find($route->getParameter('destete')); 
    }
    public function index(Request $request)
    {
        if($request->get('animal_id') =='' 
            && $request->get('fecha_de_destete')==''
            ){
            //poner los animales
            $filtro = Animales::lists('arete', 'id');
            //valores para poder visualizar a todos los que se han destestado
            $destetes = Destete::Destetes();

            //para que los usuarios no tengan que teclear todo
                //la url hacemos un metodo ajasx
            if($request->ajax())
            {
                //el cual hace las mismas funciones y hace que funcione 
                //nuestro javascript de la carpeta public
                return response()->json(view('destete.destetes', compact('destetes'))->render());
            }

            return view('destete.index', compact('destetes','filtro'));
        }
        else
        {
            //busqueda por arete
            if($request->get('fecha_de_destete') !='')
            {
                $filtro = Animales::lists('arete', 'id');
                $destetes = Destete::fecha_de_destete($request->get('fecha_de_destete'))->paginate(13);                
                return view('destete.index', compact('destetes','filtro'));
            }
            if($request->get('animal_id') !='')
            {
                $filtro = Animales::lists('arete', 'id');
                $destetes = Destete::animal_id($request->get('animal_id'))->paginate(13);                
                return view('destete.index', compact('destetes','filtro'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //buscamos todos los animales por el arete
        $animales = Animales::lists('arete', 'id');
        //redireccionamos a la vista
        return view('destete.create', compact('animales'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesteteRequest $request)
    { 
        //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
        Destete::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        Session::flash('message','Destete Creado Correctamente');
        return Redirect::to('/destete');
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
        //redireccionamos al menu
        return view('destete.show');
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
