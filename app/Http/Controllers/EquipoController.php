<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuarios;

class EquipoController extends Controller
{
    //
    public function index()
    {
        $pc = DB::table('pc')
        ->join('estado', 'estado.ids', '=', 'pc.estado')
        ->join('usuarios', 'usuarios.id', '=', 'pc.usuario')
        ->get();
        $usuario = Usuarios::get();

        return view('Equipo/equipo',[
            'pc'=> $pc,
            'usuario'=> $usuario,
        ]);
    }

    public function json()
    {
        $pc = DB::table('pc')
        ->join('estado', 'estado.ids', '=', 'pc.estado')
        ->join('usuarios', 'usuarios.id', '=', 'pc.usuario')
        ->get();
        //$usuario = Usuarios::get();
        return $pc;
    }

    public function update_status(Request $request){

        DB::table('pc')->where('idpc',$request['equipo'])
        ->update([
           'estado' => $request['statu']
       ]);
       $response['success'] = true;
       return $response;
    }

    public function start_equip(Request $request){

      DB::table('pc')->where('idpc',$request['equipo'])
      ->update([
         'estado' => 1,
         'usuario' => $request['usuario'],
         'tiempo' => $request['tiempo'],
     ]);
     $response['success'] = true;
     return $response;

    }

}
