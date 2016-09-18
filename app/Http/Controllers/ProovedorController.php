<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Proovedor;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProovedorController
 *
 * @author  The scaffold-interface created at 2016-08-12 03:56:47pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $proovedors = Proovedor::all();
        return view('proovedor.index',compact('proovedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('proovedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proovedor = new Proovedor();

        
        $proovedor->nombreProovedor = $request->nombreProovedor;

        
        $proovedor->direccion = $request->direccion;

        
        $proovedor->ubicacion = $request->ubicacion;

        
        $proovedor->telefono = $request->telefono;

        
        $proovedor->correo = $request->correo;

        
        
        $proovedor->save();

        return redirect('proovedor');
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
            return URL::to('proovedor/'.$id);
        }

        $proovedor = Proovedor::findOrfail($id);
        return view('proovedor.show',compact('proovedor'));
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
            return URL::to('proovedor/'. $id . '/edit');
        }

        
        $proovedor = Proovedor::findOrfail($id);
        return view('proovedor.edit',compact('proovedor'  ));
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
        $proovedor = Proovedor::findOrfail($id);
    	
        $proovedor->nombreProovedor = $request->nombreProovedor;
        
        $proovedor->direccion = $request->direccion;
        
        $proovedor->ubicacion = $request->ubicacion;
        
        $proovedor->telefono = $request->telefono;
        
        $proovedor->correo = $request->correo;
        
        
        $proovedor->save();

        return redirect('proovedor');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/proovedor/'. $id . '/delete/');

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
     	$proovedor = Proovedor::findOrfail($id);
     	$proovedor->delete();
        return URL::to('proovedor');
    }
}
