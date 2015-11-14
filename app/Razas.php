<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Razas extends Model
{

//buscamos la tabla
	protected $table = "razas";
//filtramos lo que queremos
	protected $fillable = [
		'nombre',
		'minutos_de_produccion_de_leche',
		'dias_de_celo',
		'semanas_de_gestacion'
		];

	public function scopeNOMBRE($query, $nombre)
    {
    	if(trim($nombre) != "")
    	{
    		$query->select('razas.*')->where('nombre',"LIKE","%$nombre%");
    	}
    	
    }
    //
}
