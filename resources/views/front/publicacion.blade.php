@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center mt-4 mb-4">
        <div class="col-sm-10">
            <h1 class="text-center">{{$publicacion->nombre}}</h1>
            <img class="img-fluid mx-auto d-block" src="/img/publicaciones/{{$publicacion->urlfoto}}" alt="{{$publicacion->nombre}}">
            <div>
                <p>{{$publicacion->descripcion}}</p>
                <p class="small text-right">{{$publicacion->created_at->diffForHumans()}} con {{$publicacion->visitas}} visitas</p>
            </div>
        </div>
    </div>
</div>
@endsection