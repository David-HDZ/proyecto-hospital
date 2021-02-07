@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->user_type == 'medico')
            <h2 class="text-center">Sistema de registro de pacientes</h2>
            <div class="row justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('Hola ' . Auth::user()->name . '!') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col col-12 col-lg-4 my-3">
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        @else
            <!-- SECCION PARA LOS ADMINISTRADORES -->
            <h2 class="text-center mb-4">Sistema generador de reportes</h2>
        @endif
    </div>
@endsection
