<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Personas
 *
 * @author  The scaffold-interface created at 2016-08-09 09:36:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('personas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombreCompleto');
        
        $table->String('nitCI');
        
        $table->String('direccion');
        
        $table->String('Telefono');
        
        $table->String('Celular');
        
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
        Schema::drop('personas');
    }
}
