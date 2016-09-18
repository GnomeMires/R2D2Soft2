<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Compras
 *
 * @author  The scaffold-interface created at 2016-08-15 04:04:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('compras',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('cantidad');
        
        $table->String('tipoCompra');
        
        $table->float('costoTotal');
        
        $table->float('costoUnitario');
        
        $table->date('fechaCompra');
        
        $table->longText('Observaciones');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('datosempresa_id')->unsigned();
        $table->foreign('datosempresa_id')->references('id')->on('datosempresas')->onDelete('cascade');

        
        $table->integer('repuestosmoto_id')->unsigned();
        $table->foreign('repuestosmoto_id')->references('id')->on('repuestosmotos')->onDelete('cascade');

        
        $table->integer('proovedor_id')->unsigned();
        $table->foreign('proovedor_id')->references('id')->on('proovedors')->onDelete('cascade');

        
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
        Schema::drop('compras');
    }
}
