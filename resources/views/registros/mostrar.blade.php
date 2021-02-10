@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 margin-tb">
                <div class="pull-left">
                    <h2>Detalles del paciente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-link my-4" href="{{ route('pacientes.index') }}">&laquo; Atrás</a>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <h1> Nombre: {{ $paciente->nombre }}</h1>
            </div>
        </div>
    </div>
@endsection
