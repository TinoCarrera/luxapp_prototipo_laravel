@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.productos.update',$producto],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador:') !!}
                {!!Form::text('slug',$producto->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título:') !!}
                {!!Form::text('title',$producto->title,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción general:') !!}
                {!!Form::text('description',$producto->description,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre:') !!}
                {!!Form::text('nombre',$producto->nombre,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('precio','Precio:') !!}
                {!!Form::text('precio',$producto->precio,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad:') !!}
                {!!Form::text('unidad',$producto->unidad,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock:') !!}
                {!!Form::text('stock',$producto->stock,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden:') !!}
                {!!Form::text('orden',$producto->orden,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','descripcion') !!}
                {!!Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                <img src="/img/productos/{{$producto->urlfoto}}" class="img-fluid">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    {!!Form::checkbox('estado',null,$producto->estado) !!} Publicado <br>
                </div>
                <div class="col-sm-6">
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
                </div>
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
