@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                    <th>Activo</th>
                    <th>Editar</th>
                </thead>
                <tbody>
                @foreach($data as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->email}}</td>
                        <td>{{$r->telefono}}</td>
                        <td>{{$r->estado}}</td>
                        <td>
                            <a class="btn btn-outline-warning btn-block" href="{{route('admin.usuarios.edit',$r->id)}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
