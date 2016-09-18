<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Informecontratos
 *
 * @author  The scaffold-interface created at 2016-08-28 07:26:57am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Informecontratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('informecontratos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('destinatario');
        
        $table->String('via');
        
        $table->String('referido');
        
        $table->date('fechaInforme');
        
        $table->longText('descripcionReparacion');

        $table->longText('observaciones');

        $table->longText('sugerencias');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('trabajomoto_id')->unsigned();
        $table->foreign('trabajomoto_id')->references('id')->on('trabajomotos')->onDelete('cascade');

        
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
        Schema::drop('informecontratos');
    }
}
