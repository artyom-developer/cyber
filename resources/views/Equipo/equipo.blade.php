@extends('layouts.app')

@section('content')

<div   class="container">
  <equipo-component usuarios="{{$usuario}}"></equipo-component>
</div>

@endsection
