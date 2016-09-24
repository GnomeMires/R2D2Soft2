<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Trabajomotos
 *
 * @author  The scaffold-interface created at 2016-08-12 08:44:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Trabajomotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('trabajomotos',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('fechaRecepcion');
        
        $table->date('fechaEntrega');
        
        $table->float('costoTotal');

        $table->float('totalRecibo');

        $table->float('cambioRecibo');

        $table->boolean('estado');
        
        $table->text('descripcion');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('moto_id')->unsigned();
        $table->foreign('moto_id')->references('id')->on('motos')->onDelete('cascade');

        
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        
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
        Schema::drop('trabajomotos');
    }
}
