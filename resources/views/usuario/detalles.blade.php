@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Usuario</div>

                <div class="card-body">

                    <form method="POST" action="{{ action('UsuarioController@create') }}" >
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $usuario->nombre }}" readonly>     
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror"  value="{{ $usuario->apellido }}" readonly>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $usuario->email }}" readonly>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Género') }}</label>

                                <div class="col-md-6  @error('genero') is-invalid @enderror" name="genero"  for="genero" >
                                    <select class="form-control" readonly >
                                    <option value="Hombre">{{$usuario->genero}}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="tipo_doc" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Documento') }}</label>

                                <div class="col-md-6  @error('tipo_doc') is-invalid @enderror" name="tipo_doc"  for="tipo_doc">
                                    <select class="form-control"  readonly>
                                    <option  selected>{{$usuario->tipo_doc}}</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>
                                <div class="col-md-6">
                                    <input id="documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ $usuario->documento }}" readonly>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>
                                <div class="col-md-6">
                                    <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ $usuario->fecha_nacimiento }}" readonly >

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" value="{{ $usuario->telefono }}" readonly>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="estrato" class="col-md-4 col-form-label text-md-right">{{ __('Estrato') }}</label>
                                <div class="col-md-6">
                                    <input id="estrato" type="number" class="form-control @error('estrato') is-invalid @enderror" value="{{ $usuario->estrato }}" readonly>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" value="{{ $usuario->direccion }}" readonly>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" value="{{ $usuario->ciudad }}" readonly>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ubicacion" class="col-md-4 col-form-label text-md-right">{{ __('Ubicacion') }}</label>

                                <div class="col-md-6  @error('ubicacion') is-invalid @enderror"  >
                                    <select class="form-control" readonly >
                                    <option value="Urbano">{{ $usuario->ubicacion }}</option>
                                    </select>
                                </div>
                            </div>

                        </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
