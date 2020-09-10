@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            @if(count($productos))
            <table class="table">
                <thead>
                    <th>Nº</th><th>Nombre</th><th>Acciones</th>
                </thead>
                <tbody>
                @foreach($productos as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->nombre}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.productos.edit',$r->id)}}">Editar</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.productos.destroy',$r->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <p>No existe ningún registro.</p>
            @endif
            <a class="btn btn-primary" href="{{route('admin.productos.create')}}">Agregar</a>
        </div>
    </div>
</div>
@endsection