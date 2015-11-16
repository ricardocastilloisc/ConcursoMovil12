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
use ConcursoMovil12\Http\Requests\RazaUpdateRequest;

class RazaController extends Controller
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
        $this->raza = Razas::find($route->getParameter('raza')); 
    }

    public function index(Request $request)
    {
        //si no hay metodo de busqueda entonces has el codigo normalmente 
        if($request->get('nombre') =='')
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
        }//si hay metodo de busqueda has la consulta personalizada
        else 
        {
            if($request->get('nombre') != '')
            {
                 //se va ejecutar la funcion scope porque 
                //no hay funcion relevante y se ejecuta por si 
                //solo hay que aclarar que 
                //nombre 
                //es como se va llamar el spoce
                //es niestro metodo de busqueda predeterminado
                $razas = Razas::nombre($request->get('nombre'))->orderBy('nombre','ASC')->paginate(4);
                return view('raza.index',compact('razas'));

            } 
        }   //
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
    //el request es para validar los datos 
    public function store(RazaRequest $request)
    {
        //accedemos a todo 
        //los datos para poder 
        //mandarlos a ala vista 
        Razas::create($request->all());
        //mensaje para poder determinar 
        //si fue creada la raza
        Session::flash('message','Raza Creada Correctamente');
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
        //redireccionamiento con los datos de
        //la raza
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
    public function update(RazaUpdateRequest $request, $id)
    {
        ///en la optimizacion que declaramos en el 
        ///contructor
        ///accedemos a todos los datos 
        $this->raza->fill($request->all());
        //guardamos los cambios
        $this->raza->save();
        //damos un mensaje mensaje que efectivamente fueron guardados
        Session::flash('message','Raza Editada Correctamente');
        return Redirect::to('/raza');
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
        //eliminamos la raza
        $this->raza->delete();
        //damos un mensaje
        Session::flash('message','Raza Eliminada Correctamente');
        return Redirect::to('/raza');
        //
    }
}
