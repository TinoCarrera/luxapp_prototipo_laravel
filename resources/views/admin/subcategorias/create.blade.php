@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.subcategorias.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Identificador') !!}
                {!!Form::text('slug',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Título') !!}
                {!!Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Descripción general') !!}
                {!!Form::text('description',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','Nombre') !!}
                {!!Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripción') !!}
                {!!Form::textarea('descripcion',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    {!!Form::submit('Guardar',['class'=>'btn btn-success']) !!}
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
