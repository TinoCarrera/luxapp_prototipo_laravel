@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.categorias.update',$categoria],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('slug',$categoria->slug,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    {!!Form::text('title',$categoria->title,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    {!!Form::text('description',$categoria->description,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    {!!Form::text('nombre',$categoria->nombre,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!! Form::label('descripcion','Descripción detallada', ['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::textarea('descripcion', $categoria->descripcion, ['class'=>'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    <img src="/img/categorias/{{$categoria->urlfoto}}" class="img-fluid img-thumbnail">
                    {!!Form::file('urlfoto',['class'=>'pt-2']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Portada</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    {!!Form::checkbox('portada',null,$categoria->portada,['class'=>'form-check-input'])!!}
                    {!!Form::label('portada', 'Añadir a la portada',['class'=>'form-check-label'])!!}
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
