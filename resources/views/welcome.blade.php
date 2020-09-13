@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @forelse ($portadas as $r)
      <div class="carousel-item @if ($loop->index==0) active @endif">
      <img src="/img/portadas/{{$r->urlfoto}}" class="d-block w-100" alt="{{$r->frase}}">
      </div>
    @empty
    @endforelse
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-4">
            <h1 class="text-center">Panaderia Lux</h1>
        </div>
        @forelse ($productos as $r)
            <div class="col-sm-3 mt-3">
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
