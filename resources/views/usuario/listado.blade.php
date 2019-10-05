@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Usuario</div>

                <div class="card-body">

                        <a href="form "  class="btn btn-default">Nuevo</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($usuario as $user)
                                <tr>
                                    <td>{{ $user->documento }}</td>
                                    <td>{{ $user->nombre }} {{ $user->apellido }}</td>
                                    <td>{{ $user->email }}  </td>
                                    <td>
                                        <a href="get/{{ $user->id }} "  class="btn btn-default">Detalles</a>
                                    </td>
                                    <td>
                                        <a href="edit/{{ $user->id }} "  class="btn btn-default">Editar</a>
                                    </td>
                                    <td>
                                      <form  action="{{action('UsuarioController@delete')}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$user->id}}"/>
                                        <button class="btn btn-danger" onclick="return confirm('Eliminar?')"   >
                                          Eliminar
                                        </button>
                                      </form>
                                    </td>
                                  </tr>
                            @endforeach

                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
