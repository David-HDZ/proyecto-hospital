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
                    <div class="col col-12 col-lg-12 my-3">
                        <div class="card text-center">
                            <div class="card-header">
                                Formulario Covid-19
                            </div>
                            <div class="card-body">
                                <a href="{{route('formulario-registro') }}" class="btn btn-primary">Registrar Paciente</a>
                            </div>
                        </div>
                    </div>
            </div>
        @else
            <!-- SECCION PARA LOS ADMINISTRADORES -->
            <h2 class="text-center mb-4">Sistema generador de reportes</h2>
        @endif
    </div>
@endsection
