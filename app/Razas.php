<?php

namespace ConcursoMovil12;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Razas extends Model
{

	protected $table = "razas";

	protected $fillable = [
		'nombre',
		'minutos_de_produccion_de_leche',
		'dias_de_celo',
		'semanas_de_gestacion'
		];

    //
}
