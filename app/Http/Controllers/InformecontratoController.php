<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Informecontrato;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Barryvdh\DomPDF\Facade as PDF;

use R2D2Soft\Trabajomoto;
use R2D2Soft\Repuestosutilizado;
use R2D2Soft\Detalletrabajo;
use R2D2Soft\Datosempresa;


/**
 * Class InformecontratoController
 *
 * @author  The scaffold-interface created at 2016-08-28 07:26:57am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InformecontratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $informecontratos = Informecontrato::all();
        return view('informecontrato.index',compact('informecontratos'));
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
            return URL::to('informecontrato/'. $id . '/create');
        }
        
        return view('informecontrato.create',compact('trabajomotos', 'id' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informecontrato = new Informecontrato();

        
        $informecontrato->destinatario = $request->destinatario."<br><strong>".$request->cargoDestinatario."</strong>";

        
        $informecontrato->via = $request->via."<br><strong>".$request->cargoVia."</strong>";

        
        $informecontrato->referido = $request->referido;

        
        $informecontrato->fechaInforme = $request->fechaInforme;

        
        $informecontrato->descripcionReparacion = $request->descripcionReparacion;

        
        $informecontrato->sugerencias = $request->sugerencias;


        $informecontrato->observaciones = $request->observaciones;
        
        
        $informecontrato->trabajomoto_id = $request->trabajomoto_id;

        
        $informecontrato->save();

        $taller = Datosempresa::findOrfail(1);

        $id = $informecontrato->trabajomoto_id;
        $trabajomoto = Trabajomoto::findOrfail($id);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$id)->get();

        return view('informecontrato.imprimirInforme',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos','informecontrato'));
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
            return URL::to('informecontrato/'.$id);
        }
        $informecontrato = Informecontrato::findOrfail($id);
        $taller = Datosempresa::findOrfail(1);

        $idTrabajo = $informecontrato->trabajomoto_id;
        $trabajomoto = Trabajomoto::findOrfail($idTrabajo);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$idTrabajo)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$idTrabajo)->get();

        return view('informecontrato.imprimirInforme',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos','informecontrato'));
    }

    public function imprimirProforma($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('informecontrato/'.$id.'/imprimirProforma');
        }
        $informecontrato = Informecontrato::findOrfail($id);
        $taller = Datosempresa::findOrfail(1);

        $idTrabajo = $informecontrato->trabajomoto_id;
        $trabajomoto = Trabajomoto::findOrfail($idTrabajo);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$idTrabajo)->get();

        $pdf = PDF::loadView('informecontrato.proforma',compact('trabajomoto','taller','repuestosUtilizados','informecontrato'));
        return $pdf->stream();
    }

    public function showProforma($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('informecontrato/'.$id.'/showProforma');
        }
        $informecontrato = Informecontrato::findOrfail($id);
        $taller = Datosempresa::findOrfail(1);

        $idTrabajo = $informecontrato->trabajomoto_id;
        $trabajomoto = Trabajomoto::findOrfail($idTrabajo);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$idTrabajo)->get();

        return view('informecontrato.imprimirProforma',compact('trabajomoto','taller','repuestosUtilizados','informecontrato'));
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
            return URL::to('informecontrato/'. $id . '/edit');
        }

        
        $trabajomotos = Trabajomoto::all()->lists('fechaRecepcion','id');

        
        $informecontrato = Informecontrato::findOrfail($id);
        return view('informecontrato.edit',compact('informecontrato' ,'$informecontrato' ) );
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
        $informecontrato = Informecontrato::findOrfail($id);
    	
        $informecontrato->destinatario = $request->destinatario;
        
        $informecontrato->via = $request->via;
        
        $informecontrato->referido = $request->referido;
        
        $informecontrato->fechaInforme = $request->fechaInforme;
        
        $informecontrato->descripcionReparacion = $request->descripcionReparacion;
        
        $informecontrato->sugerencias = $request->sugerencias;

        $informecontrato->observaciones = $request->observaciones;
        
        $informecontrato->trabajomoto_id = $request->trabajomoto_id;

        
        $informecontrato->save();

        return redirect('informecontrato');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/informecontrato/'. $id . '/delete/');

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
     	$informecontrato = Informecontrato::findOrfail($id);
     	$informecontrato->delete();
        return URL::to('informecontrato');
    }
}
