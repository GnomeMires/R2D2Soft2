<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Motos
 *
 * @author  The scaffold-interface created at 2016-08-12 08:38:23pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Motos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('motos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('noChasis');
        
        $table->String('noMotor');
        
        $table->String('placaControl');
        
        $table->String('color');
        
        $table->String('marca');
        
        $table->String('detalles');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('persona_id')->unsigned();
        $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

        
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
        Schema::drop('motos');
    }
}
