<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Repuestosutilizados
 *
 * @author  The scaffold-interface created at 2016-08-12 09:55:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Repuestosutilizados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('repuestosutilizados',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('fechaUso');
        
        $table->integer('cantidad');

        $table->float('precioUnitario');

        $table->float('precioTotal');

        $table->string('origenRepuesto',12);

        $table->text('descripcion');
        /**
         * Foreignkeys section
         */
        
        $table->integer('trabajomoto_id')->unsigned();
        $table->foreign('trabajomoto_id')->references('id')->on('trabajomotos')->onDelete('cascade');

        
        $table->integer('repuestosmoto_id')->unsigned();
        $table->foreign('repuestosmoto_id')->references('id')->on('repuestosmotos')->onDelete('cascade');

        
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
        Schema::drop('repuestosutilizados');
    }
}
