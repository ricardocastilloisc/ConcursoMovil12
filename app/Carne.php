<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Carne extends Model
{
	//accedos a la tabla en especifico 
	protected $table = "carnes";
//buscamos lo valores que 
//vamos a buscar 
//como a modificar 
	protected $fillable = [
		'fecha_de_muerte',
		'libras_de_aprovechamiento',
		'animal_id',
		];
    //
    public static function Carness()
	{

		
		return DB::table('carnes')
			->join('animales','animales.id','=','carnes.animal_id')
			->select('carnes.*','animales.arete')
			->orderBy('carnes.fecha_de_muerte','ASC')
			->paginate(13);
	}
		//busqueda por  fecha de destete
    public function scopeFECHA_DE_MUERTE($query, $fecha_de_muerte)
    {
        if($fecha_de_muerte != "")
        {
            $query->join('animales','animales.id','=','carnes.animal_id')
			->select('carnes.*','animales.arete')
			->orderBy('carnes.fecha_de_muerte','ASC')
            ->where('fecha_de_muerte',"$fecha_de_muerte");
        }
    }
    ///buscar por arete 
    public function scopeANIMAL_ID($query, $animal_id)
    {
        if($animal_id != "")
        {
            $query->join('animales','animales.id','=','carnes.animal_id')
			->select('carnes.*','animales.arete')
			->orderBy('carnes.fecha_de_muerte','ASC')
			->where('animal_id',"$animal_id");
        }
    }
}
