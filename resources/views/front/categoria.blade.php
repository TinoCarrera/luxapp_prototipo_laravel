@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-2 mt-5 mb-5">
            <div class="list-group ">
                @forelse ($categoria->subcategorias as $r)
                        <a href="/productos/{{$categoria->slug}}/{{$r->slug}}" class="list-group-item list-group-item-action">
                            {{$r->nombre}}
                        </a>
                @empty
                @endforelse
            </div>
        </div>
        <div class="col-md-10">
            <div class="row justify-content-center">
                @forelse ($productos as $r)
                    <div class="col-sm-4 mt-5 mb-5">
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
                    <p>No se encuenta ningún producto.</p>
                @endforelse
            </div>
        </div>
        <div class="col-sm-10 mt-5 mb-5">
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