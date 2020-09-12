@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($pedidos))
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Código</th>
                    <th>Fecha del pedido</th>
                    <th>Entregado</th>
                    <th>Detalles</th>
                    <th>Editar</th>
                </thead>
                <tbody>
                @foreach($pedidos as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->codigo}}</td>
                        <td>{{$r->created_at}}</td>
                        <td>{{$r->estado}}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-block" href="{{route('admin.pedidos.show',$r->id)}}">Detalles</a>
                        </td>
                        <td>
                            @if(!$r->estado)
                                <a class="btn btn-outline-warning btn-block" href="{{route('admin.pedidos.edit',$r->id)}}">Editar</a>
                            @else
                                <a class="btn btn-outline-warning btn-block disabled " href="{{route('admin.pedidos.edit',$r->id)}}">Editar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <p>No existe ningún pedido.</p>
            @endif
        </div>
    </div>
</div>
@endsection