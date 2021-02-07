@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container mb-4">
            <div class="jumbotron">
                <h1 class="display-4">¡Bienvenido!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention
                    to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
            </div>
            <img src="{{ asset('storage/img/2.jpg') }}" class="img-fluid" alt="...">
        </div>
    </div>
@endsection
