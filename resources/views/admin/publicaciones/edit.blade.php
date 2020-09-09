@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.publicaciones.update',$publicacion],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador:') !!}
                {!!Form::text('slug',$publicacion->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título:') !!}
                {!!Form::text('title',$publicacion->title,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción general:') !!}
                {!!Form::text('description',$publicacion->description,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre:') !!}
                {!!Form::text('nombre',$publicacion->nombre,['class'=>'form-control','maxlength'=>'50']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción:') !!}
                {!!Form::textarea('descripcion',$publicacion->descripcion,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('categorias_id','Categoría:') !!}
                {!!Form::select('categorias_id',$categorias,$publicacion->categorias_id,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                <img src="/img/publicaciones/{{$publicacion->urlfoto}}" class="img-fluid">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row justify-content-center">
                
                {!!Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
                
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection
