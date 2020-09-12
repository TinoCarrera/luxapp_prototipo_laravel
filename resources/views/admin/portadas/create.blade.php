@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.portadas.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('frase','Frase',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('frase',null,['class'=>'form-control','placeholder'=>'Coloca la frase de la portada']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('link','Enlace',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('link',null,['class'=>'form-control','placeholder'=>'Coloca el enlace url']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::file('urlfoto')  !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Posición',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('orden',null,['class'=>'form-control','placeholder'=>'Coloca la posición']) !!}
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
