<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Fotosmotos
 *
 * @author  The scaffold-interface created at 2016-08-12 08:47:17pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Fotosmotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('fotosmotos',function (Blueprint $table){

        $table->increments('id');
        
        $table->Text('descripcionEstado');
        
        $table->date('fechaFoto');
        
        $table->String('direccionFoto');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('moto_id')->unsigned();
        $table->foreign('moto_id')->references('id')->on('motos')->onDelete('cascade');

        
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
        Schema::drop('fotosmotos');
    }
}
