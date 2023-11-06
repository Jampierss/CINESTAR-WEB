<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cinestarController extends Controller
{
    public function index(){
        return view('index');
    }

    public function cines(){
        $cines = DB::select('call sp_getCines()');
        return view('cines',['cines' => $cines]);
    }

    public function cartelera(){
        $peliculas = DB::select('call sp_getPeliculas(1)');
        return view('peliculas',['peliculas' => $peliculas]);
    }

    public function estrenos(){
        $peliculas = DB::select('call sp_getPeliculas(2)');
        return view('peliculas',['peliculas' => $peliculas]);
    }

    public function cine($id){
        $cine = DB::select("call sp_getCine($id)");
        return view('cine',['cine' => $cine]);
    }
}
