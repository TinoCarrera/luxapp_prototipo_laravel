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
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5">
            <h1 class="text-center">Panaderia Lux</h1>
        </div>
        @forelse ($productos as $r)
            <div class="col-sm-3">
                <div class="card shadow">
                    <a href="/productos/{{$r->slug}}" title="{{$r->nombre}}">
                        <img src="/img/productos/{{$r->urlfoto}}" class="card-img-top" alt="Comprar {{$r->nombre}}">
                    </a>
                    <div class="card-body">
                        <p class="text-center">${{$r->precio}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/productos/{{$r->slug}}" class="btn btn-outline-dark rounded-pill btn-block">
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
@endsection
