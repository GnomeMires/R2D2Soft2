<?php

namespace R2D2Soft\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Repuestosutilizado;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Trabajomoto;
use R2D2Soft\Datosempresa;
use R2D2Soft\Detalletrabajo;
use R2D2Soft\Repuestosmoto;


/**
 * Class RepuestosutilizadoController
 *
 * @author  The scaffold-interface created at 2016-08-12 09:55:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RepuestosutilizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $repuestosutilizados = Repuestosutilizado::all();
        return view('repuestosutilizado.index',compact('repuestosutilizados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create($id, Request $request)
    {
        if($request->ajax())
        {
            return URL::to('repuestosutilizado/'. $id . '/create');
        }

        $repuestosmotos = Repuestosmoto::all()->lists('nombreRepuesto','id');
        
        return view('repuestosutilizado.create',compact('repuestosmotos', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repuesto = Repuestosmoto::findorfail($request->repuestosmoto_id);
        if($repuesto->cantidad>=$request->cantidad && $request->origenRepuesto != "Cliente") {
            $repuestosutilizado = new Repuestosutilizado();

            $now = date("Y-m-d");

            $repuestosutilizado->fechaUso = $now;


            $repuestosutilizado->cantidad = $request->cantidad;


            $repuestosutilizado->descripcion = $request->descripcion;


            if($request->precioUnitario != null && $request->precioUnitario != 0)
            {
                $repuestosutilizado->precioUnitario = $request->precioUnitario;
                $repuestosutilizado->precioTotal = $request->precioUnitario*$request->cantidad;
            }
            else
            {
                $repuestosutilizado->precioUnitario = $repuesto->precioVenta;
                $repuestosutilizado->precioTotal = $repuesto->precioVenta*$request->cantidad;
            }

            $repuestosutilizado->trabajomoto_id = $request->trabajomoto_id;


            $repuestosutilizado->repuestosmoto_id = $request->repuestosmoto_id;


            $repuestosutilizado->origenRepuesto = $request->origenRepuesto;


            $repuestosutilizado->save();


            $repuesto->cantidad -= $request->cantidad;

            $repuesto->save();
        }
        else
        {
            if($request->origenRepuesto == "Cliente")
            {
                $repuestosutilizado = new Repuestosutilizado();


                $repuestosutilizado->fechaUso = date('d/m/Y');


                $repuestosutilizado->cantidad = $request->cantidad;


                $repuestosutilizado->descripcion = $request->descripcion;


                $repuestosutilizado->precioUnitario = 0;


                $repuestosutilizado->precioTotal = 0;


                $repuestosutilizado->trabajomoto_id = $request->trabajomoto_id;


                $repuestosutilizado->repuestosmoto_id = $request->repuestosmoto_id;


                $repuestosutilizado->origenRepuesto = $request->origenRepuesto;


                $repuestosutilizado->save();
            }
        }

        $taller = Datosempresa::findOrfail(1);
        $trabajomoto = Trabajomoto::findOrfail($request->trabajomoto_id);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$request->trabajomoto_id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$request->trabajomoto_id)->get();

        return view('trabajomoto.listDetallesTrabajo',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos'));
    }

    /**
     * Display the specified resource.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('repuestosutilizado/'.$id);
        }

        $repuestosutilizado = Repuestosutilizado::findOrfail($id);
        return view('repuestosutilizado.show',compact('repuestosutilizado'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('repuestosutilizado/'. $id . '/edit');
        }

        
        $trabajomotos = Trabajomoto::all()->lists('moto_id','id');

        
        $repuestosmotos = Repuestosmoto::all()->lists('nombreRepuesto','id');

        
        $repuestosutilizado = Repuestosutilizado::findOrfail($id);
        return view('repuestosutilizado.edit',compact('repuestosutilizado' ,'trabajomotos', 'repuestosmotos' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $repuestosutilizado = Repuestosutilizado::findOrfail($id);
    	
        $repuestosutilizado->fechaUso = $request->fechaUso;
        
        $repuestosutilizado->cantidad = $request->cantidad;

        $repuestosutilizado->descripcion = $request->descripcion;
        
        $repuestosutilizado->trabajomoto_id = $request->trabajomoto_id;

        
        $repuestosutilizado->repuestosmoto_id = $request->repuestosmoto_id;

        
        $repuestosutilizado->save();

        return redirect('repuestosutilizado');
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     * @param        \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/repuestosutilizado/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$repuestosutilizado = Repuestosutilizado::findOrfail($id);
     	$repuestosutilizado->delete();
        return URL::to('repuestosutilizado');
    }
}
