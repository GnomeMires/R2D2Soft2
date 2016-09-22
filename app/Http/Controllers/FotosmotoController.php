<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Fotosmoto;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Moto;


/**
 * Class FotosmotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:47:17pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FotosmotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $fotosmotos = Fotosmoto::all();
        return view('fotosmoto.index',compact('fotosmotos'));
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
            return URL::to('fotosmoto/'. $id . '/create');
        }
        
        return view('fotosmoto.create',compact('motos','id'));
    }

    public function showFotos($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('fotosmoto/'.$id.'/showFotos');
        }
        $fotosmotos = Fotosmoto::where('moto_id',$id)->get();

        return view('fotosmoto.index',compact('fotosmotos','id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fotosmoto = new Fotosmoto();


        $fotosmoto->descripcionEstado = $request->descripcionEstado;

        
        $fotosmoto->fechaFoto = $request->fechaFoto;

        
        $fotosmoto->direccionFoto = '';

        $fotosmoto->moto_id = $request->moto_id;

        $fotosmoto->save();

        $imgName= $fotosmoto->id.'.'.$request->file('direccionFoto')->getClientOriginalExtension();

        $request->file('direccionFoto')->move(base_path().'/public/images/',$imgName);

        $fotosmoto->direccionFoto = $imgName;
        $fotosmoto->save();

        $id = $fotosmoto->moto_id;
        
        $fotosmotos = Fotosmoto::where('moto_id',$id)->get();

        return view('fotosmoto.index',compact('fotosmotos','id'));
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
            return URL::to('fotosmoto/'.$id);
        }

        $fotosmoto = Fotosmoto::findOrfail($id);
        return view('fotosmoto.show',compact('fotosmoto'));
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
            return URL::to('fotosmoto/'. $id . '/edit');
        }

        
        $motos = Moto::all()->lists('placaControl','id');

        
        $fotosmoto = Fotosmoto::findOrfail($id);
        return view('fotosmoto.edit',compact('fotosmoto' ,'motos' ) );
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
        $fotosmoto = Fotosmoto::findOrfail($id);
    	
        $fotosmoto->descripcionEstado = $request->descripcionEstado;
        
        $fotosmoto->fechaFoto = $request->fechaFoto;
        
        $fotosmoto->direccionFoto = $request->direccionFoto;
        
        
        $fotosmoto->moto_id = $request->moto_id;

        
        $fotosmoto->save();

        return redirect('fotosmoto');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/fotosmoto/'. $id . '/delete/');

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
     	$fotosmoto = Fotosmoto::findOrfail($id);
     	$fotosmoto->delete();
        return URL::to('fotosmoto');
    }
}
