@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.productos.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('slug',null,['class'=>'form-control','placeholder'=>'Coloca el identificador']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Coloca un título']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('description',null,['class'=>'form-control','placeholder'=>'Añade una descripción general']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Coloca un nombre']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('precio','Precio',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Coloca el precio']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('unidad',null,['class'=>'form-control','placeholder'=>'Coloca las unidades de venta']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('stock',null,['class'=>'form-control','placeholder'=>'Coloca la cantidad existente']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Posición',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('orden',null,['class'=>'form-control','placeholder'=>'Coloca su posición']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción detallada',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::textarea('descripcion',null,['class'=>'form-control','rows' => 3,'placeholder'=>'Añade una descripción detallada']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::file('urlfoto')  !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Publicación</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    {!!Form::checkbox('estado',null,['class'=>'form-check-input']) !!}
                    {!!Form::label('estado','Publicar',['class'=>'form-check-label'])!!}
                  </div>
                </div>
            </div>
            <div class="col-sm-3 mx-auto pt-4">
                {!!Form::submit('Guardar',['class'=>'btn btn-outline-primary btn-block']) !!}
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
