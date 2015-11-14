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
		'parir_id',
		'preniada_id',
		'fecha_de_compra',
		'fecha_de_nacimiento',
		'peso',
		'sexo'
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
			->where('arete',"LIKE","%$arete%");//como busca
	
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
			->where('raza_id',"LIKE","%$raza_id%");
	
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
			->where('fecha_de_compra',"LIKE","%$fecha_de_compra%");
	
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
			->where('fecha_de_nacimiento',"LIKE","%$fecha_de_nacimiento%");
	
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
			->where('sexo',"LIKE","%$sexo%");
	
    	}
    }	
}
