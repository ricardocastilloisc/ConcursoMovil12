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
}
