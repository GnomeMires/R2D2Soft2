<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Detalletrabajo;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Trabajomoto;
use R2D2Soft\Datosempresa;
use R2D2Soft\Repuestosutilizado;


/**
 * Class DetalletrabajoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:55:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DetalletrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $detalletrabajos = Detalletrabajo::all();
        return view('detalletrabajo.index',compact('detalletrabajos'));
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
            return URL::to('detalletrabajo/'. $id . '/create');
        }
        
        return view('detalletrabajo.create',compact('id'  ));
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
            'detalleTrabajo' => 'required',
            'precio' => 'required|numeric',
        ]);

        $detalletrabajo = new Detalletrabajo();

        
        $detalletrabajo->detalleTrabajo = $request->detalleTrabajo;

        
        $detalletrabajo->estado = $request->estado;

        
        $detalletrabajo->precio = $request->precio;

        
        
        $detalletrabajo->trabajomoto_id = $request->trabajomoto_id;

        
        $detalletrabajo->save();

        $taller = Datosempresa::findOrfail(1);
        $trabajomoto = Trabajomoto::findOrfail($detalletrabajo->trabajomoto_id);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$detalletrabajo->trabajomoto_id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$detalletrabajo->trabajomoto_id)->get();

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
            return URL::to('detalletrabajo/'.$id);
        }

        $detalletrabajo = Detalletrabajo::findOrfail($id);
        return view('detalletrabajo.show',compact('detalletrabajo'));
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
            return URL::to('detalletrabajo/'. $id . '/edit');
        }

        
        $trabajomotos = Trabajomoto::all()->lists('moto_id','id');

        
        $detalletrabajo = Detalletrabajo::findOrfail($id);
        return view('detalletrabajo.edit',compact('detalletrabajo' ,'trabajomotos' ) );
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
            'detalleTrabajo' => 'required',
            'precio' => 'required|numeric',
        ]);
        $detalletrabajo = Detalletrabajo::findOrfail($id);
    	
        $detalletrabajo->detalleTrabajo = $request->detalleTrabajo;
        
        $detalletrabajo->estado = $request->estado;
        
        $detalletrabajo->precio = $request->precio;
        
        
        $detalletrabajo->trabajomoto_id = $request->trabajomoto_id;

        
        $detalletrabajo->save();

        return redirect('detalletrabajo');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/detalletrabajo/'. $id . '/delete/');

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
     	$detalletrabajo = Detalletrabajo::findOrfail($id);
     	$detalletrabajo->delete();
        return URL::to('detalletrabajo');
    }
}
