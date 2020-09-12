@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($categorias))
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Subcategorías</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach($categorias as $r)
                            <tr>
                                <td>{{$r->id}}</td>
                                <td>{{$r->nombre}}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-block" href="{{route('admin.categorias.show',$r->id)}}">Subcategorías</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning btn-block" role="button" href="{{route('admin.categorias.edit',$r->id)}} ">Editar</a>
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE','route'=>['admin.categorias.destroy',$r->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Eliminar',['class'=>'btn btn-outline-danger btn-block']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No existe ninguna categoría.</p>
            @endif
                <div class="col-sm-5 mx-auto pt-2">
                    <a class="btn btn-outline-success btn-block" href="{{route('admin.categorias.create')}}">Añadir nueva categoría</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection