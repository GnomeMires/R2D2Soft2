<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Repuestosmotos
 *
 * @author  The scaffold-interface created at 2016-08-12 09:00:38pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Repuestosmotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('repuestosmotos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombreRepuesto');
        
        $table->String('codigoRepuesto');
        
        $table->integer('cantidad');
        
        $table->String('unidadMedida');
        
        $table->String('tipoRepuesto');
        
        $table->float('precioVenta');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('datosempresa_id')->unsigned();
        $table->foreign('datosempresa_id')->references('id')->on('datosempresas')->onDelete('cascade');

        
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
        Schema::drop('repuestosmotos');
    }
}
