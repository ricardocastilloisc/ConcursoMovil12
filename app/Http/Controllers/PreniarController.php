<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Preniar;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Requests\PreniarRequest;
use ConcursoMovil12\Http\Requests\PreniarUpdateRequest;
use ConcursoMovil12\Http\Controllers\Controller;

class PreniarController extends Controller
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
        $this->preniar = Preniar::find($route->getParameter('preniar')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index(Request $request)
    {
        if($request->get('animal_id') =='' 
            && $request->get('fecha_de_preniada')==''
            ){
            $filtro = Animales::where('sexo','Hembra')->lists('arete','id');
            //valores para poder visualizar a todos los que se han destestado
            $preniars = Preniar::Prenias();

            //para que los usuarios no tengan que teclear todo
                //la url hacemos un metodo ajasx
            if($request->ajax())
            {
                //el cual hace las mismas funciones y hace que funcione 
                //nuestro javascript de la carpeta public
                return response()->json(view('preniar.preniars', compact('preniars'))->render());
            }

            return view('preniar.index', compact('preniars','filtro'));
        }
        else
        {
            //busqueda por fecha de muerte
            if($request->get('fecha_de_preniada') !='')
            {
                $filtro = Animales::where('sexo','Hembra')->lists('arete','id');
                $preniars = Preniar::fecha_de_preniada($request->get('fecha_de_preniada'))->paginate(13);                
                return view('preniar.index', compact('preniars','filtro'));
            }
            //busqueda por arete
            if($request->get('animal_id') !='')
            {
                $filtro = Animales::where('sexo','Hembra')->lists('arete','id');
                $preniars = Preniar::animal_id($request->get('animal_id'))->paginate(13);                
                return view('preniar.index', compact('preniars','filtro'));
            }
        }
    }

    public function create()
    {
        //buscamos a todas las 
        //madres con un where 
        //se podia hace una funcion 
        //pero causo problemas   
        $madres = Animales::where('sexo','Hembra')->lists('arete','id');
        //buscamos todas las razas que pertenecen todas las madres
        //esto evita que busquemos todas las razas
        //por una extraña gran razon
        //en este si funciono la funcion del
        //modelo
        //redireccionamos a la vista pasamos lo que buscamos
        //en nuestras busquedas con las funciones
         return view('preniar.create', compact('madres'));

        //
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreniarRequest $request)
    {
    //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
        Preniar::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        Session::flash('message','Preñiamiento Creado Correctamente');
        return Redirect::to('/preniar');
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
        return view('preniar.show');
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
        return view('preniar.edit',['preniar'=>$this->preniar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreniarUpdateRequest $request, $id)
    {
        //buscar los valores
        $this->preniar->fill($request->all());
        //luego guarda la actulización
        $this->preniar->save();
        //envia un mensaje que en la vista aparecera
        Session::flash('message','Preñiamiento Editado Correctamente');
        //redireccioname
        return Redirect::to('/preniar');
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

        $this->preniar->delete();
        //envia un mensaje
        Session::flash('message','Preñiamiento Eliminada Correctamente');
        //redireccioname    
       return Redirect::to('/preniar');
        //
    }
}
