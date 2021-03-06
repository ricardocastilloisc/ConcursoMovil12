<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           //creamos la tabla y especificamos los campos como los queremos 
        Schema::create('razas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->integer('minutos_de_produccion_de_leche');
            $table->integer('dias_de_celo');
            $table->integer('semanas_de_gestacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('razas');
    }
}
