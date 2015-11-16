<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Carne;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Requests\CarneRequest;
use ConcursoMovil12\Http\Requests\CarneUpdateRequest;
use ConcursoMovil12\Http\Controllers\Controller;

class CarneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //debe estar logeado para poder acceder al controlador
        $this->middleware('auth');
        //buscamos los datos para no solictarlo cada rato en 
        //en donde esta los edit y demas en el arreglos son las
        //funciones donde se haran las modificaciones
        $this->beforeFilter('@find',['only' =>['edit','update','destroy']]);    
    }
    public function find(Route $route)
    {
        //funcion para buscar
        $this->carne = Carne::find($route->getParameter('carne')); 
    }
    public function index(Request $request)
    {
        if($request->get('animal_id') =='' 
            && $request->get('fecha_de_muerte')==''
            ){
                    //poner los animales
            $filtro = Animales::CarnessM();
            //valores para poder visualizar a todos los que se han destestado
            $carnes = Carne::Carness();

            //para que los usuarios no tengan que teclear todo
                //la url hacemos un metodo ajasx
            if($request->ajax())
            {
                //el cual hace las mismas funciones y hace que funcione 
                //nuestro javascript de la carpeta public
                return response()->json(view('carne.carnes', compact('carnes'))->render());
            }

            return view('carne.index', compact('carnes','filtro'));
        }
        else
        {
            //busqueda por fecha de muerte
            if($request->get('fecha_de_muerte') !='')
            {
                $filtro = Animales::CarnessM();
                $carnes = Carne::fecha_de_muerte($request->get('fecha_de_muerte'))->paginate(13);                
                return view('carne.index', compact('carnes','filtro'));
            }
            //busqueda por arete
            if($request->get('animal_id') !='')
            {
                $filtro = Animales::CarnessM();
                $carnes = Carne::animal_id($request->get('animal_id'))->paginate(13);                
                return view('carne.index', compact('carnes','filtro'));
            }
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //buscamos todos los animales por el arete
        //
        Animales::lists('arete', 'id');
        $animales = Animales::Carness();
        //redireccionamos a la vista
        return view('carne.create', compact('animales'));
        //
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarneRequest $request)
    {
        //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
        Carne::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        Session::flash('message','Carne Creado Correctamente');
        return Redirect::to('/carne');
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
        return view('carne.show');
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
        return view('carne.edit',['carne'=>$this->carne]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarneUpdateRequest $request, $id)
    {
        //buscar los valores
        $this->carne->fill($request->all());
        //luego guarda la actulización
        $this->carne->save();
        //envia un mensaje que en la vista aparecera
        Session::flash('message','Carne Editado Correctamente');
        //redireccioname
        return Redirect::to('/carne');
        //

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

        $this->carne->delete();
        //envia un mensaje
        Session::flash('message','Carne Eliminada Correctamente');
        //redireccioname    
       return Redirect::to('/carne');
    }
}
