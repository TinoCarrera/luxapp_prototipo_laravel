@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-sm-9">
            {!!Form::open(['route'=>['admin.portadas.update',$portada],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('frase','Frase',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('frase',$portada->frase,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('link','Enlace',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('link',$portada->link,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('urlfoto','Foto',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    <img src="/img/portadas/{{$portada->urlfoto}}" class="img-fluid img-thumbnail">
                    {!!Form::file('urlfoto',['class'=>'pt-2']) !!}
                </div>
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden',['class'=>'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!!Form::text('orden',$portada->orden,['class'=>'form-control']) !!}
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
