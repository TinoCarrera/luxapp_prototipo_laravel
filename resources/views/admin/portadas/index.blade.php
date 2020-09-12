@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            @if(count($portadas))
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Frase</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($portadas as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->frase}}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-block" href="{{route('admin.portadas.edit',$r->id)}}">Editar</a>
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.portadas.destroy',$r->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar',['class'=>'btn btn-outline-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>No existe ninguna portada.</p>
            @endif
            <div class="col-sm-5 mx-auto pt-2">
                <a class="btn btn-outline-success btn-block" href="{{route('admin.portadas.create')}}">Añadir una nueva portada</a>
            </div>
        </div>
    </div>
</div>
@endsection