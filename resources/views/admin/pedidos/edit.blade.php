@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6 ">
            <table class="table">
                <thead>
                    <th>Código</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$pedido->codigo}}
                        </td>
                    </tr>
                </tbody>
            </table>
            {!!Form::open(['route'=>['admin.pedidos.update',$pedido],'method'=>'PUT'])!!}
                <div class="row form-group">
                    <div class="col-sm-6">
                        {!!Form::checkbox('estado',null,$pedido->estado) !!} Entregado <br>
                    </div>
                    <div class="col-sm-6">
                        {!!Form::submit('Guardar',['class'=>'btn btn-success']) !!}
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
