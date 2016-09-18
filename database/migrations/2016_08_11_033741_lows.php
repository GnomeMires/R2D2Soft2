<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Lows
 *
 * @author  The scaffold-interface created at 2016-08-11 03:37:41pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Lows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('lows',function (Blueprint $table){

        $table->increments('id');
        
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
        Schema::drop('lows');
    }
}
