<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use R2D2Soft\Http\Controllers\Controller;
use R2D2Soft\Persona;
use R2D2Soft\Trabajomoto;
use R2D2Soft\Datosempresa;
use R2D2Soft\Repuestosutilizado;
use R2D2Soft\Detalletrabajo;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use DB;

use R2D2Soft\Moto;


use R2D2Soft\User;


/**
 * Class TrabajomotoController
 *
 * @author  The scaffold-interface created at 2016-08-12 08:44:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TrabajomotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajomotos = DB::table('trabajomotos')
            ->join('motos', 'motos.id', '=', 'trabajomotos.moto_id')
            ->join('users', 'users.id', '=', 'trabajomotos.user_id')
            ->leftJoin('informecontratos', 'trabajomotos.id', '=', 'informecontratos.trabajomoto_id')
            ->leftJoin('informeentregas', 'trabajomotos.id', '=', 'informeentregas.trabajomoto_id')
            ->select('trabajomotos.*', 'motos.placaControl as placaControl', 'users.name as name','informecontratos.id as contratoID', 'informeentregas.id as entregaID')
            ->get();
        return view('trabajomoto.index',compact('trabajomotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $motos = Moto::all()->lists('placaControl','id');
        
        $users = User::all()->lists('name','id');
        $personas = Persona::all()->lists('nombreCompleto','id');
        
        return view('trabajomoto.create',compact('motos' , 'users' , 'personas'   ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajomoto = new Trabajomoto();

        
        $trabajomoto->fechaRecepcion = $request->fechaRecepcion;

        
        $trabajomoto->fechaEntrega = $request->fechaEntrega;

        
        $trabajomoto->costoTotal = -1;

        
        $trabajomoto->estado = "No Terminado";

        
        $trabajomoto->descripcion = $request->descripcion;

        
        if($request->origenMoto == 'N')
        {
            $moto = new Moto();


            $moto->noChasis = $request->noChasis;


            $moto->noMotor = $request->noMotor;


            $moto->placaControl = $request->placaControl;


            $moto->color = $request->color;


            $moto->marca = $request->marca;


            $moto->detalles = $request->detalles;



            $moto->persona_id = $request->person_id;


            $moto->save();


            $trabajomoto->moto_id = $moto->id;
        }
        else
        {
            $trabajomoto->moto_id = $request->moto_id;
        }
        
        $trabajomoto->user_id = $request->user_id;

        
        $trabajomoto->save();

        $taller = Datosempresa::findOrfail(1);

        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$trabajomoto->id)->get()->all();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$trabajomoto->id)->get()->all();

        return view('trabajomoto.listDetallesTrabajo',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos'));
    }
    /**
     * Display the specified resource.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function updateEstado($id ,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('trabajomoto/'. $id . '/updateEstado');
        }
        $trabajomoto = Trabajomoto::findOrfail($id);
        if($trabajomoto->estado==1)
        {
            $trabajomoto->estado=0;
            $trabajomoto->save();
        }
        else
        {
            $trabajomoto->estado=1;
            $trabajomoto->save();
        }

        $trabajomotos = DB::table('trabajomotos')
            ->join('motos', 'motos.id', '=', 'trabajomotos.moto_id')
            ->join('users', 'users.id', '=', 'trabajomotos.user_id')
            ->leftJoin('informecontratos', 'trabajomotos.id', '=', 'informecontratos.trabajomoto_id')
            ->leftJoin('informeentregas', 'trabajomotos.id', '=', 'informeentregas.trabajomoto_id')
            ->select('trabajomotos.*', 'motos.placaControl as placaControl', 'users.name as name','informecontratos.id as contratoID', 'informeentregas.id as entregaID')
            ->get();
        
        return view('trabajomoto.index',compact('trabajomotos'));
    }
    /**
     * Display the specified resource.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id ,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('trabajomoto/'. $id . '/show');
        }
        $taller = Datosempresa::findOrfail(1);
        
        $trabajomoto = Trabajomoto::findOrfail($id);
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$id)->get();

        return view('trabajomoto.listDetallesTrabajo',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos'));
    }

    /**
     * Display the specified resource.
     *
     * @param        \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function imprimirRecibo($id ,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('trabajomoto/'. $id . '/imprimirRecibo');
        }
        $taller = Datosempresa::findOrfail(1);

        $trabajomoto = Trabajomoto::findOrfail($id);

        $trabajomoto->costoTotal=$request->adelantado;
        $trabajomoto->save();
        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$id)->get();
        $adelantado = $trabajomoto->costoTotal;

        return view('trabajomoto.imprimirRecibo',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos','adelantado'));
    }

    public function mostrarRecibo($id ,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('trabajomoto/'. $id . '/mostrarRecibo');
        }
        $taller = Datosempresa::findOrfail(1);

        $trabajomoto = Trabajomoto::findOrfail($id);

        $repuestosUtilizados = Repuestosutilizado::where('trabajomoto_id',$id)->get();
        $detalletrabajos = Detalletrabajo::where('trabajomoto_id',$id)->get();
        $adelantado = $trabajomoto->costoTotal;

        return view('trabajomoto.imprimirRecibo',compact('trabajomoto','taller','repuestosUtilizados','detalletrabajos','adelantado'));
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
            return URL::to('trabajomoto/'. $id . '/edit');
        }

        
        $motos = Moto::all()->lists('placaControl','id');

        
        $users = User::all()->lists('name','id');

        
        $trabajomoto = Trabajomoto::findOrfail($id);
        return view('trabajomoto.edit',compact('trabajomoto' ,'motos', 'users' ) );
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
        $trabajomoto = Trabajomoto::findOrfail($id);
    	
        $trabajomoto->fechaRecepcion = $request->fechaRecepcion;
        
        $trabajomoto->fechaEntrega = $request->fechaEntrega;
        
        $trabajomoto->costoTotal = -1;

        
        $trabajomoto->descripcion = $request->descripcion;
        
        
        $trabajomoto->moto_id = $request->moto_id;

        
        $trabajomoto->user_id = $request->user_id;

        
        $trabajomoto->save();

        return redirect('trabajomoto');
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
        $msg = Ajaxis::BtDeleting('Advertencia!!','¿Esta seguro de Eliminar este Registro?','/trabajomoto/'. $id . '/delete/');

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
     	$trabajomoto = Trabajomoto::findOrfail($id);
     	$trabajomoto->delete();
        return URL::to('trabajomoto');
    }
}
