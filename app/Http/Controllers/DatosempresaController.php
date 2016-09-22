<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Datosempresa;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class DatosempresaController
 *
 * @author  The scaffold-interface created at 2016-08-10 11:11:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DatosempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $datosempresas = Datosempresa::all();
        return view('datosempresa.index',compact('datosempresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('datosempresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosempresa = new Datosempresa();

        
        $datosempresa->nombreEmpresa = $request->nombreEmpresa;

        
        $datosempresa->nit = $request->nit;

        
        $datosempresa->direccion = $request->direccion;

        
        $datosempresa->telefono = $request->telefono;

        
        $datosempresa->celular = $request->celular;

        
        
        $datosempresa->save();

        return redirect('datosempresa');
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
            return URL::to('datosempresa/'.$id);
        }

        $datosempresa = Datosempresa::findOrfail($id);
        return view('datosempresa.show',compact('datosempresa'));
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
            return URL::to('datosempresa/'. $id . '/edit');
        }

        
        $datosempresa = Datosempresa::findOrfail($id);
        return view('datosempresa.edit',compact('datosempresa'  ));
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
        $datosempresa = Datosempresa::findOrfail($id);
    	
        $datosempresa->nombreEmpresa = $request->nombreEmpresa;
        
        $datosempresa->nit = $request->nit;
        
        $datosempresa->direccion = $request->direccion;
        
        $datosempresa->telefono = $request->telefono;
        
        $datosempresa->celular = $request->celular;
        
        
        $datosempresa->save();

        return redirect('datosempresa');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/datosempresa/'. $id . '/delete/');

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
     	$datosempresa = Datosempresa::findOrfail($id);
     	$datosempresa->delete();
        return URL::to('datosempresa');
    }
}
