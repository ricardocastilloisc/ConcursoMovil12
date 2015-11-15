<?php

namespace ConcursoMovil12;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Animales extends Model
{
//accedos a la tabla en especifico 
	protected $table = "animales";
//buscamos lo valores que 
//vamos a buscar 
//como a modificar 
	protected $fillable = [
		'nombre',
		'arete',
		'raza_id',
		'fecha_de_compra',
		'fecha_de_nacimiento',
		'peso',
		'sexo',
		'arete_madre',
		'vivo',
		];
//esta funcion es personalizada 
//osea laravel no 
//tiene en sus 
//metodos predeterminados
//haciendolo con una tabla relacionada
	public static function Animaless()
	{
		return DB::table('animales')
			->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('vivo','1')
			->paginate(4);
	}

	public static function AnimalessRazas()
	{
		return DB::table('animales')
			->join('razas','razas.id','=','animales.raza_id')
			->select('razas.id','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('vivo','1')
			->lists('raza', 'razas.id');
	}

	public static function AnimalessNacimiento()
	{
		return DB::table('animales')
			->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('fecha_de_nacimiento',"!=","0000-00-00")
			->where('vivo','1')
			->paginate(4);
	}




	//funcion metodo de busqueda por arete
	//en teoria da igual si 
	//esta en mayuscula y en minuscula 
	//pero para evitar cualquier error
	//y porque funciono a la 
	//primera pues todo con mayuscula jejejejej
	public function scopeARETE($query, $arete)
    {
    	if(trim($arete) != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')//join que coresponda
			->select('animales.*','razas.nombre as raza')//lo que busco 
			->orderBy('animales.nombre','ASC')//como lo ordeno
			->where('arete',"LIKE","%$arete%")
			->where('vivo','1');//como busca
	
    	}
    }	
    //busqueda por raza en un tabla relacionada
    public function scopeRAZA($query, $raza_id)
    {
    	if(trim($raza_id) != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('raza_id',"LIKE","%$raza_id%")
			->where('vivo','1');
	
    	}
    }
    //busqueda por fecha de compra
    public function scopeFECHA_DE_COMPRA($query, $fecha_de_compra)
    {
    	if($fecha_de_compra != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('fecha_de_compra',"LIKE","%$fecha_de_compra%")
			->where('vivo','1');
	
    	}
    }	
        //busqueda por fecha de nacimiento
    public function scopeFECHA_DE_NACIMIENTO($query, $fecha_de_nacimiento)
    {
    	if($fecha_de_nacimiento != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('fecha_de_nacimiento',"LIKE","%$fecha_de_nacimiento%")
			->where('vivo','1');
	
    	}
    }	
    //busqueda por sexo 
    public function scopeSEXO($query, $sexo)
    {
    	if($sexo != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('sexo',"LIKE","%$sexo%")
			->where('vivo','1');
	
    	}
    }
    ///buscar por arete madre
    public function scopeARETE_MADRE($query, $arete_madre)
    {
    	if(trim($arete_madre) != "")
    	{
    		$query->join('razas','razas.id','=','animales.raza_id')
			->select('animales.*','razas.nombre as raza')
			->orderBy('animales.nombre','ASC')
			->where('arete_madre',"LIKE","%$arete_madre%")
			->where('vivo','1');
	
    	}
    }		
}
