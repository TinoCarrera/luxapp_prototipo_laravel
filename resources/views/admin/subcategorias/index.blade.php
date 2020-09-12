@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($subcategorias))
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Productos</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach($subcategorias as $r)
                        <tr>
                            <td>{{$r->id}}</td>
                            <td>{{$r->nombre}}</td>
                            <td>
                                <a class="btn btn-outline-primary btn-block" href="{{route('admin.subcategorias.show',$r->id)}}">Productos</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-warning btn-block" href="{{route('admin.subcategorias.edit',$r->id)}}">Editar</a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','route'=>['admin.subcategorias.destroy',$r->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar',['class'=>'btn btn-outline-danger btn-block']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No existe ninguna subcategoría registrada.</p>
            @endif
            <div class="col-sm-5 mx-auto pt-2">
                <a class="btn btn-outline-success btn-block" href="{{route('admin.subcategorias.create')}}">Añadir una nueva subcategoría</a>
            </div>
        </div>
    </div>
</div>
@endsection