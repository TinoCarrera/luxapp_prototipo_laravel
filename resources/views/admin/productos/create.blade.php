@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.productos.store'],'method'=>'POST','files'=>true])!!}
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
                {!!Form::label('precio','Precio:') !!}
                {!!Form::text('precio',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad:') !!}
                {!!Form::text('unidad',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock:') !!}
                {!!Form::text('stock',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden:') !!}
                {!!Form::text('orden',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción:') !!}
                {!!Form::textarea('descripcion',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    {!!Form::label('urlfoto','Foto:') !!}
                </div>
                <div class="col-sm-3">
                    {!!Form::file('urlfoto') !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    {!!Form::checkbox('estado',null) !!} Publicado <br>
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
