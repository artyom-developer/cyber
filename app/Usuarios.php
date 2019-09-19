<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table='usuarios';

    protected $fillable=[
      'email',
      'nombre',
      'apellido',
      'tipo_doc',
      'documento',
      'fecha_nacimiento',
      'estrato',
      'telefono',
      'ciudad',
      'direccion',
      'ubicacion',
      'genero'
    ];


}
