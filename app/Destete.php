<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Destete extends Model
{
//accedos a la tabla en especifico 
	protected $table = "destetes";
//buscamos lo valores que 
//vamos a buscar 
//como a modificar 
	protected $fillable = [
		'fecha_de_destete',
		'animal_id',
		];
    //
    public static function Destetes()
	{
		return DB::table('destetes')
			->join('animales','animales.id','=','destetes.animal_id')
			->select('destetes.*','animales.arete')
			->orderBy('destetes.fecha_de_destete','ASC')
			->paginate(13);
	}

	//busqueda por  fecha de destete
    public function scopeFECHA_DE_DESTETE($query, $fecha_de_destete)
    {
        if($fecha_de_destete != "")
        {
            $query->join('animales','animales.id','=','destetes.animal_id')
			->select('destetes.*','animales.arete')
			->orderBy('destetes.fecha_de_destete','ASC')
            ->where('fecha_de_destete',"$fecha_de_destete");
        }
    }
    ///buscar por arete 
    public function scopeANIMAL_ID($query, $animal_id)
    {
        if($animal_id != "")
        {
            $query->join('animales','animales.id','=','destetes.animal_id')
			->select('destetes.*','animales.arete')
			->orderBy('destetes.fecha_de_destete','ASC')
			->where('animal_id',"$animal_id");
        }
    }
}
