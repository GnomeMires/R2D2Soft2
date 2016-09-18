<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Datosempresas
 *
 * @author  The scaffold-interface created at 2016-08-10 11:11:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Datosempresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('datosempresas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombreEmpresa');
        
        $table->integer('nit');
        
        $table->String('direccion');
        
        $table->String('telefono');
        
        $table->String('celular');
        
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
        Schema::drop('datosempresas');
    }
}
