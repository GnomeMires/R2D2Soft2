<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Persona;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class PersonaController
 *
 * @author  The scaffold-interface created at 2016-08-09 09:36:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonaController extends Controller
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
        $personas = Persona::all();
        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();

        
        $persona->nombreCompleto = $request->nombreCompleto;

        
        $persona->nitCI = $request->nitCI;

        
        $persona->direccion = $request->direccion;

        
        $persona->Telefono = $request->Telefono;

        
        $persona->Celular = $request->Celular;

        
        
        $persona->save();

        return redirect('persona');
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
            return URL::to('persona/'.$id);
        }

        $persona = Persona::findOrfail($id);
        return view('persona.show',compact('persona'));
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
            return URL::to('persona/'. $id . '/edit');
        }

        
        $persona = Persona::findOrfail($id);
        return view('persona.edit',compact('persona'  ));
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
        $persona = Persona::findOrfail($id);
    	
        $persona->nombreCompleto = $request->nombreCompleto;
        
        $persona->nitCI = $request->nitCI;
        
        $persona->direccion = $request->direccion;
        
        $persona->Telefono = $request->Telefono;
        
        $persona->Celular = $request->Celular;
        
        
        $persona->save();

        return redirect('persona');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/persona/'. $id . '/delete/');

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
     	$persona = Persona::findOrfail($id);
     	$persona->delete();
        return URL::to('persona');
    }
}
