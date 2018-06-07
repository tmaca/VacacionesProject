<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ComprobarController extends Controller
{
    public function __construct()
    {
        $this->middleware('peticionMes');
    }

    public function mesSeleccionado(Request $request,$id){
        $nombre = Input::get('nombre');
        $mes = Input::get('mes');

        DB::table('trabajadores')->insert(
            ['nombre' => $nombre, 'mes' => $mes,'id_mes'=> $id ]);

        return view('tieneVacaciones')->with('mes',$mes);;
    }

}
