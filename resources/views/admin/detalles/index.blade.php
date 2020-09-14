@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($detalles))
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Cantidad</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Precio Total</th>
                </thead>
                <tbody>
                @foreach($detalles as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->cantidad}}</td>
                        <td>{{$r->productos->nombre}}</td>
                        <td>${{$r->productos->precio}}</td>
                        <td>${{number_format($r->productos->precio*$r->cantidad,2)}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Subtotal:</td>
                    <td>${{$detalles[0]->pedidos->subtotal}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Impuesto (18%):</td>
                    <td>${{$detalles[0]->pedidos->impuesto}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th>Total:</th>
                    <td>${{$detalles[0]->pedidos->total}}</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <th>Código del pedido</th>
                    <th>Cliente</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$detalles[0]->pedidos->codigo}}</td>
                        <td>{{$detalles[0]->pedidos->user->name}}</td>
                        <td>{{$detalles[0]->pedidos->user->email}}</td>
                        <td>{{$detalles[0]->pedidos->user->telefono}}</td>
                    </tr>
                </tbody>
            </table>
            @else
            <p>No existe ningún pedido.</p>
            @endif
        </div>
    </div>
</div>
@endsection