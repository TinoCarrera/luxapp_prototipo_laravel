@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            @if(count($categorias))
            <table class="table">
                <thead>
                    <th>Nº</th><th>Nombre</th><th>Acción</th>
                </thead>
                <tbody>
                @foreach($categorias as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->nombre}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.categorias.edit',$r->id)}}">Editar</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.categorias.destroy',$r->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <p>No hay registros</p>
            @endif
            <a class="btn btn-success" href="{{route('admin.categorias.create')}}">Agregar</a>
        </div>
    </div>
</div>
@endsection