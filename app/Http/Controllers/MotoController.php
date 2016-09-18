<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Moto;


use Amranidev\Ajaxis\Ajaxis;
use URL;

use R2D2Soft\Persona;
use R2D2Soft\User;

/**
 * Class MotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:38:23pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $motos = Moto::all();
        return view('moto.index',compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $personas = Persona::all()->lists('nombreCompleto','id');
        
        return view('moto.create',compact('personas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moto = new Moto();

        
        $moto->noChasis = $request->noChasis;

        
        $moto->noMotor = $request->noMotor;

        
        $moto->placaControl = $request->placaControl;

        
        $moto->color = $request->color;

        
        $moto->marca = $request->marca;

        
        $moto->detalles = $request->detalles;

        
        
        $moto->persona_id = $request->persona_id;

        
        $moto->save();

        return redirect('moto');
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
            return URL::to('moto/'.$id);
        }

        $moto = Moto::findOrfail($id);
        return view('moto.show',compact('moto'));
    }

    /**
     * Display motos from specified person.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function showMotos(Request $request)
    {
        $id=$request->persona_id;

        $motos = Moto::where('persona_id',$id)->get()->lists('noChasis','id');


        $users = User::all()->lists('name','id');
        $personas = Persona::all()->lists('nombreCompleto','id');

        return view('moto.showMotos',compact('motos', 'personas','id' ));
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
            return URL::to('moto/'. $id . '/edit');
        }

        
        $personas = Persona::all()->lists('nombreCompleto','id');

        
        $moto = Moto::findOrfail($id);
        return view('moto.edit',compact('moto' ,'personas' ) );
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
        $moto = Moto::findOrfail($id);
    	
        $moto->noChasis = $request->noChasis;
        
        $moto->noMotor = $request->noMotor;
        
        $moto->placaControl = $request->placaControl;
        
        $moto->color = $request->color;
        
        $moto->marca = $request->marca;
        
        $moto->detalles = $request->detalles;
        
        
        $moto->persona_id = $request->persona_id;

        
        $moto->save();

        return redirect('moto');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/moto/'. $id . '/delete/');

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
     	$moto = Moto::findOrfail($id);
     	$moto->delete();
        return URL::to('moto');
    }
}
