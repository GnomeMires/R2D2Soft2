<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Compra;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Datosempresa;


use R2D2Soft\Repuestosmoto;


use R2D2Soft\Proovedor;


/**
 * Class CompraController
 *
 * @author  The scaffold-interface created at 2016-08-15 04:04:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
        return view('compra.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datosempresas = Datosempresa::all()->lists('nombreEmpresa','id');
        
        $repuestosmotos = Repuestosmoto::all()->lists('nombreRepuesto','id');
        
        $proovedors = Proovedor::all()->lists('nombreProovedor','id');
        
        return view('compra.create',compact('datosempresas' , 'repuestosmotos' , 'proovedors'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra = new Compra();

        
        $compra->cantidad = $request->cantidad;

        
        $compra->tipoCompra = $request->tipoCompra;

        
        $compra->costoTotal = $request->costoUnitario*$request->cantidad;

        
        $compra->costoUnitario = $request->costoUnitario;

        
        $compra->fechaCompra = $request->fechaCompra;

        
        $compra->Observaciones = $request->Observaciones;

        
        
        $compra->datosempresa_id = $request->datosempresa_id;

        
        $compra->repuestosmoto_id = $request->repuestosmoto_id;

        
        $compra->proovedor_id = $request->proovedor_id;

        
        $compra->save();

        $repuesto = Repuestosmoto::findorfail($request->repuestosmoto_id);
        $repuesto->cantidad+=$request->cantidad;
        $repuesto->save();
        return redirect('compra');
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
            return URL::to('compra/'.$id);
        }

        $compra = Compra::findOrfail($id);
        return view('compra.show',compact('compra'));
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
            return URL::to('compra/'. $id . '/edit');
        }

        
        $datosempresas = Datosempresa::all()->lists('nombreEmpresa','id');

        
        $repuestosmotos = Repuestosmoto::all()->lists('nombreRepuesto','id');

        
        $proovedors = Proovedor::all()->lists('nombreProovedor','id');

        
        $compra = Compra::findOrfail($id);
        return view('compra.edit',compact('compra' ,'datosempresas', 'repuestosmotos', 'proovedors' ) );
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
        $compra = Compra::findOrfail($id);
    	
        $compra->cantidad = $request->cantidad;
        
        $compra->tipoCompra = $request->tipoCompra;
        
        $compra->costoTotal = $request->costoTotal;
        
        $compra->costoUnitario = $request->costoUnitario;
        
        $compra->fechaCompra = $request->fechaCompra;
        
        $compra->Observaciones = $request->Observaciones;
        
        
        $compra->datosempresa_id = $request->datosempresa_id;

        
        $compra->repuestosmoto_id = $request->repuestosmoto_id;

        
        $compra->proovedor_id = $request->proovedor_id;

        
        $compra->save();

        return redirect('compra');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/compra/'. $id . '/delete/');

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
     	$compra = Compra::findOrfail($id);
     	$compra->delete();
        return URL::to('compra');
    }
}
