@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-4 justify-content-center align-items-center">
        <div class="col-sm-8 mt-4 ">
            <div class="card shadow">
                <div class="card-title text-center">
                    <h1>Confirmación</h1>
                </div>
                <div class="card-body text-center">
                    <p>Gracias por procesar tu pedido.</p>
                    <p>Tu código es: {{$pedido}}.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection