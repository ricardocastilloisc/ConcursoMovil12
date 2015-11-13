<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Animales extends Model
{
	protected $table = "animales";

	protected $fillable = [
		'nombre',
		'arete',
		'raza',
		'fecha_de_compra',
		'fecha_de_nacimiento',
		'peso',
		'sexo'
		];
	
}
