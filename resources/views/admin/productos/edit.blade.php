@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.productos.update',$producto],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('slug',$producto->slug,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('title',$producto->title,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('description',$producto->description,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('nombre',$producto->nombre,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('precio','Precio',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('precio',$producto->precio,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('unidad',$producto->unidad,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('stock',$producto->stock,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('orden',$producto->orden,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripcion detallada',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    <img src="/img/productos/{{$producto->urlfoto}}" class="img-fluid img-thumbnail">
                    {!!Form::file('urlfoto',['class'=>'pt-2']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Publicación</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    {!!Form::checkbox('estado',null,$producto->estado,['class'=>'form-check-input'])!!}
                    {!!Form::label('estado', 'Publicar',['class'=>'form-check-label'])!!}
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
