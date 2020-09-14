@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <h1 class="text-center mt-4">Carrito de compras</h1>
        @if (Cart::getContent()->count()>0)
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Cantidad/Unidad</th>
                    <th>Producto</th>
                    <th>Precio unitario</th>
                    <th>Importe</th>
                    <th>Eliminar</th>
                </thead>
                    <tbody>
                        @foreach (Cart::getContent() as $item)
                            <tr>
                                <td>{{$item->quantity}} / {{$item->attributes->unidad}}</td>
                                <td>{{$item->name}}</td>
                                <td>${{number_format($item->price,2)}}</td>
                                <td>${{number_format($item->price * $item->quantity,2)}}</td>
                                <td>
                                    <form action="{{route('carrito.remover')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit">x</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td>Subtotal</td>
                            <td>${{number_format(Cart::getSubTotal(),2)}}</td>
                        </tr>
                    </tbody>
            </table>
        </div>
        <div class="col-sm-6 mb-4">
            <form action="{{route('carrito.vaciar')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-warning rounded-pill mx-auto d-block">Vaciar carrito</button>
            </form>
        </div>
        <div class="col-sm-6 mb-4">
            <form action="" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-success rounded-pill mx-auto d-block">Realizar pedido</button>
            </form>
        </div>
        @else
            <div class="jumbotron text-center w-100">
                <p>Carrito vacio</p>
                <a href="/" class="btn btn-success">Seguir comprando</a>
            </div>
        @endif
    </div>
</div>
@endsection