@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->user_type == 'medico')
            <h2 class="text-center mb-4">Sistema de registro de pacientes</h2>
        @else
            <h2 class="text-center mb-4">Sistema generador de reportes</h2>
        @endif
        <div class="row justify-content-center">
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

    </div>
@endsection
