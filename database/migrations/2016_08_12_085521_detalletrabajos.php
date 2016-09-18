<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Detalletrabajos
 *
 * @author  The scaffold-interface created at 2016-08-12 08:55:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Detalletrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('detalletrabajos',function (Blueprint $table){

        $table->increments('id');
        
        $table->longText('detalleTrabajo');
        
        $table->boolean('estado');
        
        $table->float('precio');
        
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
        Schema::drop('detalletrabajos');
    }
}
