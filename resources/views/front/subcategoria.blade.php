@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row justify-content-center">
                @forelse ($subcategoria->productos as $r)
                    <div class="col-sm-3 mt-5 mb-5">
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
    </div>
</div>
@endsection