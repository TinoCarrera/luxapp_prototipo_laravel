@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.publicaciones.update',$publicacion],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('slug',$publicacion->slug,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('title',$publicacion->title,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('description',$publicacion->description,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('nombre',$publicacion->nombre,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción detallada',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::textarea('descripcion',$publicacion->descripcion,['class'=>'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('categorias_id','Categoría',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::select('categorias_id',$categorias,$publicacion->categorias_id,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    <img src="/img/publicaciones/{{$publicacion->urlfoto}}" class="img-fluid img-thumbnail">
                    {!!Form::file('urlfoto',['class'=>'pt-2']) !!}
                </div>    
            </div>
            <div class="col-sm-3 mx-auto pt-2">
                {!!Form::submit('Guardar',['class'=>'btn btn-outline-primary btn-block']) !!}
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
