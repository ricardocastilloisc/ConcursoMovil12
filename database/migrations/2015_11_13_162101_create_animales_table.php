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
        //crewmoa sla tabla
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('arete',255);
            $table->integer('raza_id')->unsigned(); //relacionar la talas 
            $table->foreign('raza_id')//hacemos la relacion
                                ->references('id')//referenciamos la llaver primaria
                                ->on('razas')//en la tabla razas
                                ->onDelete('cascade') // que se pueda eleminar osea trigger
                                ->onUpdate('cascade'); //y se pueda actualizar
            $table->date('fecha_de_compra');
            $table->string('arete_madre',255);
            $table->date('fecha_de_nacimiento');
            $table->decimal('peso',11,3);
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
