<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Preniar extends Model
{//accedos a la tabla en especifico 
	protected $table = "preniars";
//buscamos lo valores que 
//vamos a buscar 
//como a modificar 
	protected $fillable = [
		'fecha_de_preniada',
		'animal_id',
		];
    public static function Prenias()
	{
		return DB::table('preniars')
			->join('animales','animales.id','=','preniars.animal_id')
			->select('preniars.*','animales.arete')
			->orderBy('preniars.fecha_de_preniada','ASC')
			->paginate(13);
	}
		//busqueda por  fecha de preniada
    public function scopeFECHA_DE_PRENIADA($query, $fecha_de_preniada)
    {
        if($fecha_de_preniada != "")
        {
            $query->join('animales','animales.id','=','preniars.animal_id')
			->select('preniars.*','animales.arete')
			->orderBy('preniars.fecha_de_preniada','ASC')
            ->where('fecha_de_preniada',"$fecha_de_preniada");
        }
    }
    ///buscar por arete 
    public function scopeANIMAL_ID($query, $animal_id)
    {
        if($animal_id != "")
        {
            $query->join('animales','animales.id','=','preniars.animal_id')
			->select('preniars.*','animales.arete')
			->orderBy('preniars.fecha_de_preniada','ASC')
			->where('animal_id',"$animal_id");
        }
    }
}
