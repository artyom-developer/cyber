<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Usuarios;

class UsuarioController extends Controller
{
    //
    public function form(){
      return view("usuario/form");
    }

    public function create(Request $request)
    {
      Validator::make($request->all(), [
          'nombre' => ['required', 'string', 'max:255'],
          'apellido' => ['required', 'string', 'max:255'],
          'fecha_nacimiento' => ['required' ],
          'estrato' => ['required' ],
          'telefono' => ['required' ],
          'ciudad' => ['required', 'string', 'max:255'],
          'direccion' => ['required', 'string', 'max:255'],
          'genero' => ['required', 'string', 'max:255'],
      ]);

        return Usuarios::create([
            'email' => $request['email'],
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'tipo_doc' => $request['tipo_doc'],
            'documento' => $request['documento'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
            'estrato' => $request['estrato'],
            'telefono' => $request['telefono'],
            'ciudad' => $request['ciudad'],
            'direccion' => $request['direccion'],
            'ubicacion' => $request['ubicacion'],
            'genero' => $request['genero'],

        ]);
    }
}
