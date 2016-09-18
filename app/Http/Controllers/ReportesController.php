<?php

namespace R2D2Soft\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use R2D2Soft\Http\Controllers\Controller;

use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProovedorController
 *
 * @author  The scaffold-interface created at 2016-08-12 03:56:47pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function generar(Request $request)
    {
        if(Input::get("General"))
        {
            
            return view('balanceEspecifico',compact('reporte'));
        }
        else
        {

            return view('balanceGeneral',compact('reporte'));
        }
    }

}
