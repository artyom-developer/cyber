@extends('layouts.app')

@section('content')



<div   class="container">

  <example-component></example-component>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administración equipos</div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                         <label for="exampleFormControlSelect1">Usuario</label>
                         <select class="form-control" id="exampleFormControlSelect1">
                           @foreach ($usuario as $suru)
                           <option value="{{$suru->id}}">{{$suru->nombre}} {{$suru->apellido}}</option>
                           @endforeach
                         </select>

                         <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg">Tiempo</span>
                            </div>
                            <input type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                          </div>
                       </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-body row justify-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($pc as $terminal)
                    <!-- Split dropright button -->

                    <div class="btn-group-vertical dropright col-md-4" style="margin-bottom:20px;">


                      <?php if ($terminal->ids==1): ?>
                        <button type="button" class="btn btn-danger btn-block">
                          {{$terminal->nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{$terminal->nombre}} {{$terminal->apellido}}
                        </button>

                      <?php elseif ($terminal->ids==2) : ?>
                        <button type="button" class="btn btn-success btn-block">
                          {{$terminal->nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{$terminal->estado}}
                        </button>

                      <?php else : ?>
                        <button type="button" class="btn btn-secondary btn-block">
                          {{$terminal->nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{$terminal->estado}}
                        </button>
                      <?php endif; ?>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" id="newdiv">Adicionar</a>
                        <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#exampleModal">Terminar sesión</a>
                        <a class="dropdown-item" href="#">Reiniciar Terminal</a>
                        <a class="dropdown-item" href="#">Apagar Terminal</a>
                      </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
      $("#newdiv").click(function() {
        alert("Hello world!");
      });
});
</script>

@endsection
