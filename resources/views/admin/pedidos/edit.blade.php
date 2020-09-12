@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            <table class="table table-bordered">
                <thead>
                    <th>Código</th><th>Cliente</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$pedido->codigo}}
                        </td>
                        <td>
                            {{$pedido->user->name}}
                        </td>
                    </tr>
                </tbody>
            </table>
            {!!Form::open(['route'=>['admin.pedidos.update',$pedido],'method'=>'PUT'])!!}
                <div class="form-group row">
                    <div class="col-sm-2">Entrega</div>
                    <div class="col-sm-10">
                    <div class="form-check">
                        {!!Form::checkbox('estado',null,$pedido->estado,['class'=>'form-check-input'])!!}
                        {!!Form::label('portada', 'Pedido entregado',['class'=>'form-check-label'])!!}
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 mx-auto pt-4">
                    {!!Form::submit('Guardar',['class'=>'btn btn-outline-primary btn-block']) !!}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
