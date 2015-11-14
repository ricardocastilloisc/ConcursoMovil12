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
//este controlador es para hacer todas las opercaiones que se desee en la busqueda
//de información de los animales
class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //el constructor permitira buscar lo que necesitamos 
    //para no delararlo cada rato esto optimiza el codigo 
    //y es mas limpio
    public function __construct()
    {
        //antes de hacer todo
        //declarame la funcipn find
        //y se va usar para los metodos que estan en el arreglo
        $this->beforeFilter('@find',['only' =>['edit','update','destroy']]);    
    }
    //busca la información que necesitamos en la ruta tal que declaramos 
    //en el framework
    public function find(Route $route)
    {
        //solo le decimos que 
        //acceda en en la routa del parametro 
        $this->animales = Animales::find($route->getParameter('animal')); 
    }
    public function index(Request $request)
    {
        //si no hay ninguna de esta busquedas haz el codigo normalmente
         if($request->get('arete') =='' 
            && $request->get('raza_id')==''
            && $request->get('fecha_de_compra')==''
            && $request->get('fecha_de_nacimiento')==''
            && $request->get('sexo')==''
            )
         {   
            //necesitamos los datos 
            //de los animales solo que esto es mas personalizado 
            //ya que la manera de poder accerder a los datos 
            //tenemos que definir las tablas irelacionadas
            //que declaramos en el modelo
            $animales = Animales::Animaless();
            //esto tambien cuenta para el modelo de las razas
            //si queremos que se visualice en las vista 
            $razas = Razas::lists('nombre', 'id'); 
            //para que los usuarios no tengan que teclear todo
            //la url hacemos un metodo ajasx
            if($request->ajax())
            {
                //el cual hace las mismas funciones y hace que funcione 
                //nuestro javascript de la carpeta public
                return response()->json(view('animales.index', compact('animales','razas'))->render());
            }
            //solo redireccionamos todo lo de la vista con 
            //los arreglos que se ponen 
            //en js y podemos acceder 
            return view('animales.index',compact('animales','razas'));
        }
        //sino ejecuta la busqueda corespondiente
        else 
        {
            //busqueda por arete
             if($request->get('arete') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $animales = Animales::arete($request->get('arete'))->paginate(4);                
                return view('animales.index',compact('animales','razas'));
             }
             //busqueda por raza
             if($request->get('raza_id') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $animales = Animales::raza($request->get('raza_id'))->paginate(4);                
                return view('animales.index',compact('animales','razas'));
             }
             //busqueda por compra
             if($request->get('fecha_de_compra') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $animales = Animales::fecha_de_compra($request->get('fecha_de_compra'))->paginate(4);                
                return view('animales.index',compact('animales','razas'));
             }
             //busqueda por fecha de nacimiento 
             if($request->get('fecha_de_nacimiento') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $animales = Animales::fecha_de_nacimiento($request->get('fecha_de_nacimiento'))->paginate(4);                
                return view('animales.index',compact('animales','razas'));
             }
             //busqueda por sexo:
             if($request->get('sexo') !='')
             {
                $razas = Razas::lists('nombre', 'id'); 
                $animales = Animales::sexo($request->get('sexo'))->paginate(4);                
                return view('animales.index',compact('animales','razas'));
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
        //solo listamos las razas para que se pueda visualizar 
        //todos los datos al crear 
        //ya que los demas datos de animales 
        //ya se estan enviando
        $razas = Razas::lists('nombre', 'id');
        //redireccionamos a la vista
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
        //esta funcion lo que hace es que crea 
        //por metodo post todo 
        //lo datos en la tabla
        //que esta en nuestra base de datos
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
        //solo muestrame la vista principal 
        //donde esta el menu de opciones
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
        //mandamos las razas
        //ya que animales ya esta 
        //solo necesitamos saber que razas hay con los animales
        $razas = Razas::lists('nombre', 'id');
        //por defecto tenemos que poner los datos en arreglso
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
        //si recuerdas
        //optimizamos el codigo 
        //ya los datos estan por defecto 
        //y lo unico que esta haciendo esta parte es traerlos todo 
        //los que declaramos en el modelo
        $this->animales->fill($request->all());
        //luego guarda la actulización
        $this->animales->save();
        //envia un mensaje que en la vista aparecera
        Session::flash('message','Animal Editado Correctamente');
        //redireccioname
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
        //accedemos a los datos y los eleimina
        $this->animales->delete();
        //envia un mensaje
        Session::flash('message','Animal Eliminada Correctamente');
        //redireccioname    
        return Redirect::to('/animal');
        //
    }
}