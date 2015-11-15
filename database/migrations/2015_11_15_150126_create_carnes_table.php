<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carnes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_de_muerte');
            $table->decimal('libras_de_aprovechamiento',11,3);
            $table->integer('animal_id')->unsigned(); //relacionar la talas 
            $table->foreign('animal_id')//hacemos la relacion
                                ->references('id')//referenciamos la llaver primaria
                                ->on('animales')//en la tabla razas
                                ->onDelete('cascade') // que se pueda eleminar osea trigger
                                ->onUpdate('cascade'); //y se pueda actualizar
 
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
        Schema::drop('carnes');
    }
}
