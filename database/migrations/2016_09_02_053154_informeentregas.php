<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Informeentregas
 *
 * @author  The scaffold-interface created at 2016-09-02 05:31:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Informeentregas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('informeentregas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('condicionPago');
        
        $table->date('fechaEntrega');
        
        $table->date('fechaFactura');
        
        $table->integer('noFactura');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('persona_id')->unsigned();
        $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

        
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
        Schema::drop('informeentregas');
    }
}
