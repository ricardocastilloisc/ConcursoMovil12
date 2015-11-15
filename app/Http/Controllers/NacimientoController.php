<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests\NacimientoRequest;
use ConcursoMovil12\Http\Requests\NacimientoUpdateRequest;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Controllers\Controller;
use ConcursoMovil12\Razas;


class NacimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('arete') =='' 
            && $request->get('raza_id')==''
            && $request->get('fecha_de_nacimiento')==''
            && $request->get('sexo')==''
            && $request->get('arete_madre')==''
            )
        {   
        $razas = Razas::lists('nombre', 'id'); 
          //para que los usuarios no tengan que teclear todo
            //la url hacemos un metodo ajasx
        //buscamos todos los que tienen fecha de nacimiento
        $nacimientos = Animales::AnimalessNacimiento();
        //para poder ver la razas

        if($request->ajax())
        {
            //el cual hace las mismas funciones y hace que funcione 
            //nuestro javascript de la carpeta public
            return response()->json(view('nacimientos.nacimientos', compact('nacimientos'))->render());
        }
        //volvemos 
        return view('nacimientos.index',compact('nacimientos','razas'));
        //
        //
        }
        else 
        {
            //busqueda por arete
             if($request->get('arete') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $nacimientos = Animales::arete($request->get('arete'))->paginate(4);                
                return view('nacimientos.index',compact('nacimientos','razas'));
             }
             //busqueda por raza
             if($request->get('raza_id') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $nacimientos = Animales::raza($request->get('raza_id'))->paginate(4);                
                return view('nacimientos.index',compact('nacimientos','razas'));
             }
             //busqueda por compra
             if($request->get('fecha_de_nacimiento') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $nacimientos = Animales::fecha_de_nacimiento($request->get('fecha_de_nacimiento'))->paginate(4);                
                return view('nacimientos.index',compact('nacimientos','razas'));
             }
             //busqueda por sexo:
             if($request->get('sexo') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $nacimientos = Animales::sexo($request->get('sexo'))->paginate(4);                
                return view('nacimientos.index',compact('nacimientos','razas'));
             }
             //arete madre
             if($request->get('arete_madre') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $nacimientos = Animales::arete_madre($request->get('arete_madre'))->paginate(4);                
                return view('nacimientos.index',compact('nacimientos','razas'));
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
        //buscamos a todas las 
        //madres con un where 
        //se podia hace una funcion 
        //pero causo problemas   
        $madres = Animales::where('sexo','Hembra')->lists('arete','arete');
        //buscamos todas las razas que pertenecen todas las madres
        //esto evita que busquemos todas las razas
        //por una extraña gran razon
        //en este si funciono la funcion del
        //modelo
        $razas = Animales::AnimalessRazas();
        //redireccionamos a la vista pasamos lo que buscamos
        //en nuestras busquedas con las funciones
         return view('nacimientos.create', compact('razas','madres'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NacimientoRequest $request)
    {
         //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
        Animales::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        return Redirect::to('/nacimiento');
        //
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
        return view('nacimientos.show');
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
