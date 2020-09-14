@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-4 mt-4">
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
        <div class="col-sm-5 mt-4 ">
            <form action="{{route('carrito.agregar')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}">
                <div class="form-group row justify-content-center">
                    <div class="col-12 mt-1">
                        <input type="submit" value="Agregar" class="btn btn-outline-info rounded-pill btn-block">
                    </div>
                    <div class="col-8 mt-1">
                        <input type="number" name="quantity" value="1" min="1" max="10" class="form-control">
                    </div>
                </div>
            </form>
        </div>
        @include('front.resumen')
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