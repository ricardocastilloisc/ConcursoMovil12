<?php

namespace ConcursoMovil12\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use ConcursoMovil12\Crecimiento;
use ConcursoMovil12\Animales;
use ConcursoMovil12\Http\Requests\CrecimientoRequest;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Controllers\Controller;


class CrecimientoController extends Controller
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
        $this->crecimiento = Crecimiento::find($route->getParameter('crecimiento')); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('animal_id')=='')
        {   
            //buscamos todos los animales por el arete
            $crecimientos = Animales::lists('arete', 'id');
            //redireccionamos a la vista
            return view('crecimientos.index', compact('crecimientos'));
        //
        }
        else
        { 
            if($request->get('animal_id') !='')
            {
                $crecimientos = Animales::lists('arete', 'id');
                //esto es una consulta para poder ver el crecimiento 
                //especifico para ver el crecimiento
                $crecimiento = Crecimiento::where('animal_id',$request->get('animal_id'))->get();
                //buscamos al animal que vamos a buscar
                $animal = Animales::where('id', $request->get('animal_id'))->first();

                //pasamos los parametros
                return view('crecimientos.index', compact('crecimientos','crecimiento','animal'));;
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
        $crecimientos = Animales::lists('arete', 'id');
        //redireccionamos a la vista
        return view('crecimientos.create', compact('crecimientos'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrecimientoRequest $request)
    {
        
        //resguardamos la variable del filtro 
        $valor  = $_POST['animal_id'];
        //link para direccionar y se vea el cambio
        $direccionamiento = '/crecimiento?animal_id='.$valor;
        //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
        Crecimiento::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        Session::flash('message','Crecimiento Creado Correctamente');
        return Redirect::to($direccionamiento);
        //
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
        return view('crecimientos.show');
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
      //buscamos todos los animales por el arete
        $crecimientos = Animales::lists('arete', 'id');
        //redireccionamos a la vista
        //por defecto tenemos que poner los datos en arreglso
        return view('crecimientos.edit',['crecimiento'=>$this->crecimiento,'crecimientos'=>$crecimientos]);
        //
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrecimientoRequest $request, $id)
    {
        //resguardamos la variable del filtro 
        $valor  = $_POST['animal_id'];
        //link para direccionar y se vea el cambio
        $direccionamiento = '/crecimiento?animal_id='.$valor;

        //si recuerdas
        //optimizamos el codigo 
        //ya los datos estan por defecto 
        //y lo unico que esta haciendo esta parte es traerlos todo 
        //los que declaramos en el modelo
        $this->crecimiento->fill($request->all());
        //luego guarda la actulización
        $this->crecimiento->save();
        //envia un mensaje que en la vista aparecera
        Session::flash('message','Crecimiento Editado Correctamente');
        //redireccioname
        return Redirect::to($direccionamiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //resguardamos la variable del filtro 
        $valor  = $_POST['animal_id'];
        //link para direccionar y se vea el cambio
        $direccionamiento = '/crecimiento?animal_id='.$valor;
        //accedemos a los datos y los eleimina
        $this->crecimiento->delete();
        //envia un mensaje
        Session::flash('message','Crecimiento Eliminada Correctamente');
        //redireccioname    
       return Redirect::to($direccionamiento);
    }
}
