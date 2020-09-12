@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($productos))
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach($productos as $r)
                        <tr>
                            <td>{{$r->id}}</td>
                            <td>{{$r->nombre}}</td>
                            <td>
                                <a class="btn btn-outline-warning btn-block" href="{{route('admin.productos.edit',$r->id)}}">Editar</a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','route'=>['admin.productos.destroy',$r->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar',['class'=>'btn btn-outline-danger btn-block']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No existe ningún producto registrado.</p>
            @endif
            <div class="col-sm-5 mx-auto pt-2">
                <a class="btn btn-outline-success btn-block" href="{{route('admin.productos.create')}}">Añadir un nuevo producto</a>
            </div>
        </div>
    </div>
</div>
@endsection