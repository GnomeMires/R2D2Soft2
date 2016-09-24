<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Repuestosmoto;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Datosempresa;


/**
 * Class RepuestosmotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 09:00:38pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RepuestosmotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $repuestosmotos = Repuestosmoto::all();
        return view('repuestosmoto.index',compact('repuestosmotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datosempresas = Datosempresa::all()->lists('nombreEmpresa','id');
        
        return view('repuestosmoto.create',compact('datosempresas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreRepuesto' => 'required|unique:repuestosMotos,nombreRepuesto',
            'precioVenta' => 'required|numeric',
        ]);
        $repuestosmoto = new Repuestosmoto();

        
        $repuestosmoto->nombreRepuesto = $request->nombreRepuesto;

        
        $repuestosmoto->codigoRepuesto = $request->codigoRepuesto;

        
        $repuestosmoto->cantidad = $request->cantidad;

        
        $repuestosmoto->unidadMedida = $request->unidadMedida;

        
        $repuestosmoto->tipoRepuesto = $request->tipoRepuesto;

        
        $repuestosmoto->precioVenta = $request->precioVenta;

        
        
        $repuestosmoto->datosempresa_id = $request->datosempresa_id;

        
        $repuestosmoto->save();

        return redirect('repuestosmoto');
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
            return URL::to('repuestosmoto/'.$id);
        }

        $repuestosmoto = Repuestosmoto::findOrfail($id);
        return view('repuestosmoto.show',compact('repuestosmoto'));
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
            return URL::to('repuestosmoto/'. $id . '/edit');
        }

        
        $datosempresas = Datosempresa::all()->lists('nombreEmpresa','id');

        
        $repuestosmoto = Repuestosmoto::findOrfail($id);
        return view('repuestosmoto.edit',compact('repuestosmoto' ,'datosempresas' ) );
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
        $this->validate($request, [
            'nombreRepuesto' => 'required|unique:repuestosMotos,nombreRepuesto',
            'precioVenta' => 'required|numeric',
        ]);
        $repuestosmoto = Repuestosmoto::findOrfail($id);
    	
        $repuestosmoto->nombreRepuesto = $request->nombreRepuesto;
        
        $repuestosmoto->codigoRepuesto = $request->codigoRepuesto;
        
        $repuestosmoto->cantidad = $request->cantidad;
        
        $repuestosmoto->unidadMedida = $request->unidadMedida;
        
        $repuestosmoto->tipoRepuesto = $request->tipoRepuesto;
        
        $repuestosmoto->precioVenta = $request->precioVenta;
        
        
        $repuestosmoto->datosempresa_id = $request->datosempresa_id;

        
        $repuestosmoto->save();

        return redirect('repuestosmoto');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/repuestosmoto/'. $id . '/delete/');

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
     	$repuestosmoto = Repuestosmoto::findOrfail($id);
     	$repuestosmoto->delete();
        return URL::to('repuestosmoto');
    }
}
