@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container">
            <div class="jumbotron mb-3">
                <h1 class="display-4">¡Bienvenido!</h1>
                <p class="lead">Al sistema de gestión de pacientes Covid.</p>
            </div>
            <img src="{{ asset('storage/img/3.jpg') }}" class="img-fluid" alt="...">
        </div>
    </div>
@endsection
