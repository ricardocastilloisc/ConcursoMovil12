<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{

	protected $table = "animales";

	protected $fillable = [
		'nombre',
		'arete',
		'raza_id',
		'parir_id',
		'preniada_id',
		'fecha_de_nacimiento',
		'peso',
		'sexo'
		];
}
