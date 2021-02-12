@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->user_type == 'medico')
            <h2 class="text-center">Sistema de registro de pacientes</h2>
            <div class="row justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('INICIO') }}</div>
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

            <div class="row align-items-center">
                <div class="col">
                    <div class="card mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.gaiaxtreme.com%2Fwp-content%2Fuploads%2F2019%2F02%2FRegistro-Imagem-1-01.png&f=1&nofb=1"
                                    class="img-fluid" style="min-height: 200px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Registrar Paciente</h5>
                                    <a href="{{ route('pacientes.create') }}" class="btn btn-success">Registrar
                                        Paciente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F144267%2Fisolated%2Fpreview%2Fec72add6670dacc6cf83dd4b4dabfaa1-expediente-m--dico-de-la-mujer-by-vexels.png&f=1&nofb=1"
                                    class="img-fluid" style="min-height: 200px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de Paciente</h5>
                                    <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Mostrar Lista</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <!-- SECCION PARA LOS ADMINISTRADORES -->
                <h2 class="text-center mb-4">Sistema generador de reportes</h2>
                <div class="row justify-content-center my-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('INICIO') }}</div>
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

                <div class="row align-items-center justify-content-center">
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4">
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F144267%2Fisolated%2Fpreview%2Fec72add6670dacc6cf83dd4b4dabfaa1-expediente-m--dico-de-la-mujer-by-vexels.png&f=1&nofb=1"
                                        class="img-fluid" style="min-height: 200px" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Generar reportes</h5>
                                        <a href="{{ route('registros.index') }}" class="btn btn-primary">Mostrar Lista</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        @endif
    </div>
@endsection
