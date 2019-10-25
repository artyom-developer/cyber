@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administración equipos</div>

                <div class="card-body row justify-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($pc as $terminal)
                    <!-- Split dropright button -->
                    <div class="btn-group dropright" style="margin: 10px;">
                      <?php if ($terminal->estado==1): ?>
                        <button type="button" class="btn btn-secondary">
                          Computador {{$terminal->nombre}}
                        </button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropright</span>
                        </button>
                      <?php else : ?>
                        <button type="button" class="btn btn-success">
                          Computador {{$terminal->nombre}} Error
                        </button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropright</span>
                        </button>
                      <?php endif; ?>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Terminar sesión</a>
                        <a class="dropdown-item" href="#">Reiniciar Terminal</a>
                        <a class="dropdown-item" href="#">Apagar Terminal</a>
                        <a class="dropdown-item" href="#">Configurar</a> 
                      </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
