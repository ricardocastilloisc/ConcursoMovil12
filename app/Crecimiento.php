<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Crecimiento extends Model
{
//accedos a la tabla en especifico 
	protected $table = "crecimientos";
//buscamos lo valores que 
//vamos a buscar 
//como a modificar 
	protected $fillable = [
		'fecha_de_registro',
		'peso_actual',
		'animal_id',
		];
}
