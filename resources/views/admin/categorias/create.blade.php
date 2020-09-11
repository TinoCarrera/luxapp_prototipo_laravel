@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.categorias.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador:') !!}
                {!!Form::text('slug',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título:') !!}
                {!!Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción general:') !!}
                {!!Form::text('description',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre:') !!}
                {!!Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción:') !!}
                {!!Form::textarea('descripcion',null,['class'=>'form-control', 'rows' => 3]) !!}
            </div>
            <div class="row form-group">
                <div class="col-sm-2">
                    {!!Form::label('urlfoto','Foto:') !!}
                </div>
                <div class="col-sm-4">
                    {!!Form::file('urlfoto') !!}
                </div>
            </div>
            <div class="checkbox pt-3">
                {!!Form::checkbox('portada',null) !!}
                {!!Form::label('portada', 'Añadir a la portada')!!}
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-sm-3">
                    {!!Form::submit('Guardar',['class'=>'btn btn-lg btn-primary pull-right']) !!}
                </div>
            </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
