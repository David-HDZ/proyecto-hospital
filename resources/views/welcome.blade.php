@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container">
            <div class="jumbotron mb-3">
                <h1 class="display-4">¡Bienvenido!</h1>
                <p class="lead">Esta es una aplicacion que permite generar registros de pacientes de un hospital.</p>
                <hr class="my-3">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
            </div>
            <img src="{{ asset('storage/img/2.jpg') }}" class="img-fluid" alt="...">
        </div>
    </div>
@endsection
