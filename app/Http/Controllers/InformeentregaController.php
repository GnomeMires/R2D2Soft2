<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Informeentrega;
use Amranidev\Ajaxis\Ajaxis;
use R2D2Soft\Repuestosutilizado;
use R2D2Soft\Detalletrabajo;
use URL;

use R2D2Soft\Persona;


use R2D2Soft\Trabajomoto;


/**
 * Class InformeentregaController
 *
 * @author  The scaffold-interface created at 2016-09-02 05:31:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InformeentregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $informeentregas = Informeentrega::all();
        return view('informeentrega.index',compact('informeentregas'));
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
            return URL::to('informeentrega/'. $id . '/create');
        }
        $trabajomotos = Trabajomoto::findOrfail($id);
        $trabajomotoID = $id;
        $personas = Persona::all()->lists('nombreCompleto','id');
        return view('informeentrega.create',compact('personas' , 'trabajomotoID'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informeentrega = new Informeentrega();

        
        $informeentrega->condicionPago = $request->condicionPago;

        
        $informeentrega->fechaEntrega = $request->fechaEntrega;

        
        $informeentrega->fechaFactura = $request->fechaFactura;

        
        $informeentrega->noFactura = $request->noFactura;

        if(strpos($request->origenPersona ,'N')!==false) {
            $persona = new Persona();


            $persona->nombreCompleto = $request->nombreCompleto;


            $persona->nitCI = $request->nitCI;


            $persona->direccion = $request->direccion;


            $persona->Telefono = $request->Telefono;


            $persona->Celular = $request->Celular;

            $persona->save();

            $id = $persona->id;

            $informeentrega->persona_id = $id;
        }
        else
        {
            $informeentrega->persona_id = $request->persona_id;
        }

        $informeentrega->trabajomoto_id = $request->trabajomoto_id;

        
        $informeentrega->save();

        $trabajoId = $informeentrega->trabajomoto->id;
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$trabajoId)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$trabajoId)->get();

        return view('informeentrega.imprimirInformeEntrega', compact('informeentrega','repuestosUtilizados','detalletrabajos'));
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
            return URL::to('informeentrega/'.$id);
        }

        $informeentrega = Informeentrega::findOrfail($id);
        $trabajoId = $informeentrega->trabajomoto->id;
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$trabajoId)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$trabajoId)->get();
        return view('informeentrega.imprimirInformeEntrega',compact('informeentrega','repuestosUtilizados','detalletrabajos'));
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
            return URL::to('informeentrega/'. $id . '/edit');
        }

        
        $personas = Persona::all()->lists('nombreCompleto','id');

        
        $trabajomotos = Trabajomoto::all()->lists('descripcion','id');

        
        $informeentrega = Informeentrega::findOrfail($id);
        return view('informeentrega.edit',compact('informeentrega' ,'personas', 'trabajomotos' ) );
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
        $informeentrega = Informeentrega::findOrfail($id);
    	
        $informeentrega->condicionPago = $request->condicionPago;
        
        $informeentrega->fechaEntrega = $request->fechaEntrega;
        
        $informeentrega->fechaFactura = $request->fechaFactura;
        
        $informeentrega->noFactura = $request->noFactura;
        
        
        $informeentrega->persona_id = $request->persona_id;

        
        $informeentrega->trabajomoto_id = $request->trabajomoto_id;

        
        $informeentrega->save();

        return redirect('informeentrega');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/informeentrega/'. $id . '/delete/');

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
     	$informeentrega = Informeentrega::findOrfail($id);
     	$informeentrega->delete();
        return URL::to('informeentrega');
    }
}
