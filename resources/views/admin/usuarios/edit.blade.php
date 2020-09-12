@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            <table class="table table-bordered">
                <thead>
                    <th>Nombre</th><th>Correo electrónico</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                    </tr>
                </tbody>
            </table>
            {!!Form::open(['route'=>['admin.usuarios.update',$user],'method'=>'PUT'])!!}
                <div class="form-group row">
                    <div class="col-sm-2">Estado</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {!!Form::checkbox('estado',null,$user->estado,['class'=>'form-check-input'])!!}
                            {!!Form::label('portada', 'Activar usuario',['class'=>'form-check-label'])!!}
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
