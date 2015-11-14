<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('arete',255);
            $table->integer('raza_id')->unsigned(); //relacionar la talas 
            $table->foreign('raza_id')
                                ->references('id')
                                ->on('razas')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');
            $table->date('fecha_de_compra');


            $table->integer('parir_id');
            $table->integer('preniada_id');
            $table->date('fecha_de_nacimiento');
            $table->string('peso',255);
            $table->string('sexo',10);
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
        Schema::drop('animales');
    }
}
