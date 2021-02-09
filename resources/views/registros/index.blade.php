@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull my-4">
                    <h2>Lista de pacientes</h2>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <p>{{ $message }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row justify-content-end">
            <div class="col-12 d-flex">
                <form action="{{ route('registros.index') }}" method="GET" class="form-inline ml-auto my-4">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="tipo" class="col-3">Tipo</label>
                        <select id="tipo" name="tipo" class="form-control col-9">
                            <option value="">Selecciona...</option>
                            <option value="urgencias">Urgencias</option>
                            <option value="consulta externa">Consulta externa</option>
                            <option value="adios">Quédate en casa</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="sexo" class="col-3">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control col-9">
                            <option value="">Selecciona...</option>
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="edad" class="col-3">Edad</label>
                        <select id="edad" name="edad" class="form-control col-9">
                            <option value="">Selecciona...</option>
                            <option value="1">Niños</option>
                            <option value="2">Jovenes</option>
                            <option value="3">Adultos</option>
                            <option value="4">Ancianos</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                </form>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <th>No</th>
                    <th>Nombre Completo</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Fecha de registro</th>
                    <th>Hora de registro</th>
                    <th>Tipo de Urgencia</th>
                    <th>Acciones</th>
                </thead>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>{{ $paciente->edad }}</td>
                        <td>{{ $paciente->created_at->format('d-m-Y') }}</td>
                        <td>{{ $paciente->created_at->format('h:i a') }}</td>
                        <td class="text-capitalize">{{ $paciente->tipo }}</td>
                        <td>
                            <form action="{{ route('pacientes.index', $paciente->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('pacientes.show', $paciente->id) }}">
                                    Ver detalles
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $pacientes->links() }}
    </div>

@endsection