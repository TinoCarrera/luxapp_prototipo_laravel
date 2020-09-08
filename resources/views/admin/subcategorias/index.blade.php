@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            @if(count($subcategorias))
            <table class="table">
                <thead>
                    <th>Nº</th><th>Nombre</th><th>Acciones</th>
                </thead>
                <tbody>
                @foreach($subcategorias as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->nombre}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.subcategorias.show',$r->id)}}">Productos</a>
                            <a class="btn btn-success" href="{{route('admin.subcategorias.edit',$r->id)}}">Editar</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.subcategorias.destroy',$r->id],'style'=>'display:inline']) !!}
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
            <a class="btn btn-success" href="{{route('admin.subcategorias.create')}}">Agregar</a>
        </div>
    </div>
</div>
@endsection