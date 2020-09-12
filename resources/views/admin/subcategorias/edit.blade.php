@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.subcategorias.update',$subcategoria],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('slug',$subcategoria->slug,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('title',$subcategoria->title,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('description',$subcategoria->description,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('nombre',$subcategoria->nombre,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción detallada',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::textarea('descripcion',$subcategoria->descripcion,['class'=>'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">    
                    <img src="/img/subcategorias/{{$subcategoria->urlfoto}}" class="img-fluid img-thumbnail">
                    {!!Form::file('urlfoto',['class'=>'pt-2']) !!}
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
