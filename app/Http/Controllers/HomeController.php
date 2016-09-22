<?php

namespace R2D2Soft\Http\Controllers;

use R2D2Soft\Http\Requests;
use Illuminate\Http\Request;
use R2D2Soft\Trabajomoto;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = date("Y-m-d",strtotime("-3 day"));

        $trabajomotos = DB::table('trabajomotos')
            ->join('motos','trabajomotos.moto_id','=','motos.id')
            ->whereDate('fechaEntrega','<=',$now)
            ->where('estado','=',0)
            ->get();
        return view('home', compact('trabajomotos','now'));
    }
}
