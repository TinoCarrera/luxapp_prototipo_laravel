@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4 mb-4">
            <div class="card">
                <div class="card-header text-center"><h2>Historial de pedidos</h2></div>
                <div class="card-body text-center">
                    <h3>{{Auth::user()->name}}</h3>
                    @forelse (Auth::user()->pedidos->sortByDesc('created_at') as $item)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>Código: {{$item->codigo}} </th>
                                <th>Fecha y hora: {{$item->created_at}}</th>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            
                            <thead>
                                <th>Pedido {{$loop->iteration}}</th>
                                <th>Cantidad</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cálculo</th>
                            </thead>
                            <tbody>
                                @foreach ($item->detalles as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->cantidad}}</td>
                                    <td>{{$d->productos->nombre}}</td>
                                    <td>{{$d->productos->precio}}</td>
                                    <td>{{number_format($d->productos->precio*$d->cantidad,2)}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Subtotal</td>
                                    <td>{{$item->subtotal}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Impuesto (18%)</td>
                                    <td>{{$item->impuesto}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>Total</th>
                                    <td>{{$item->total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @empty
                        <p>No tienes pedidos registrados.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
