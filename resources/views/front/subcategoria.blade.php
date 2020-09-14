@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row justify-content-center">
                @forelse ($subcategoria->productos as $r)
                    <div class="col-sm-3 mt-4 mb-4">
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
                                <form action="{{route('carrito.agregar')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$r->id}}">
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
                        </div>
                    </div>
                @empty
                    <p>No se encuenta ningún producto.</p>
                @endforelse
            </div>
        </div>
        @include('front.resumen')
        <div class="col-sm-10 mt-4 mb-4">
            <h2 class="text-center">Publicaciones</h2>
            @forelse ($blog as $r)
                <div class="card shadow mt-4" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <a href="/blog/{{$r->slug}}" title="{{$r->nombre}}">
                                <img src="/img/publicaciones/{{$r->urlfoto}}" class="card-img-top h-100" alt="{{$r->nombre}}">
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <a href="/blog/{{$r->slug}}">
                                    <h5 class="card-title">{{$r->nombre}}</h5>
                                </a>
                                <p class="card-text">{{$r->description}}</p>
                                <p class="small">{{$r->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay publicaciones</p>
            @endforelse    
        </div>
    </div>
</div>
@endsection