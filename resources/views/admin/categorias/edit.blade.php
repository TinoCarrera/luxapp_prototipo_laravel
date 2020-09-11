@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.categorias.update',$categoria],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador:') !!}
                {!!Form::text('slug',$categoria->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título:') !!}
                {!!Form::text('title',$categoria->title,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción general:') !!}
                {!!Form::text('description',$categoria->description,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre:') !!}
                {!!Form::text('nombre',$categoria->nombre,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!! Form::label('descripcion', 'Descripción:', ['class' => 'control-label']) !!}
                {!! Form::textarea('descripcion', $categoria->descripcion, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto:') !!}
                <img src="/img/categorias/{{$categoria->urlfoto}}" class="img-fluid">
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    {!!Form::file('urlfoto') !!}
                </div>
            </div>
            <div class="checkbox pt-3">
                {!!Form::checkbox('portada',null,$categoria->portada)!!}
                {!!Form::label('portada', 'Añadir a la portada')!!}
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-sm-3">
                    {!!Form::submit('Guardar',['class'=>'btn btn-lg btn-primary pull-right']) !!}
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endsection
