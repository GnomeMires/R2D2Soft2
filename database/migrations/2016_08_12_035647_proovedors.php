<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Proovedors
 *
 * @author  The scaffold-interface created at 2016-08-12 03:56:47pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Proovedors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('proovedors',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombreProovedor',25);
        
        $table->String('direccion');
        
        $table->String('ubicacion',50);
        
        $table->String('telefono',15);
        
        $table->String('correo',30);
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('proovedors');
    }
}
