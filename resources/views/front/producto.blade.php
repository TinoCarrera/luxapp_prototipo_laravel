@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center mt-4 mb-4">
        <div class="col-sm-4">
            <div class="card text-center shadow">
                <div class="card-header">
                    <h1>{{$producto->nombre}}</h1>
                  </div>
                <img class="card-img-top" src="/img/productos/{{$producto->urlfoto}}" alt="{{$producto->nombre}}">
                <div class="card-body">
                    <p class="card-text">{{$producto->descripcion}}</p>
                </div>
                <div class="card-footer">${{$producto->precio}}</div>
            </div>
        </div>
        <div class="col-sm-4">
            <a href="" class="btn btn-outline-dark rounded-pill btn-block">Comprar</a>
        </div>
        <div class="col-sm-4">
            <a href="" class="btn btn-outline-dark rounded-pill btn-block">Carrito</a>
        </div>
        <div class="col-sm-12 mt-4 text-center">
            <h2>Productos que te pueden interesar</h2>
            <div class="row justify-content-center">
                @forelse ($relacionado as $r)
                    <div class="col-sm-4 mt-3 mb-3">
                        <div class="card shadow">
                            <a href="/{{$r->slug}}" title="{{$r->nombre}}">
                                <img src="/img/productos/{{$r->urlfoto}}" class="card-img-top" alt="Comprar {{$r->nombre}}">
                            </a>
                            <div class="card-body">
                                <p class="text-center">${{$r->precio}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/{{$r->slug}}" class="btn btn-outline-dark rounded-pill btn-block">
                                    {{$r->nombre}}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="jumpotron">
                        <p class="text-center">No hay productos relacionados.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection