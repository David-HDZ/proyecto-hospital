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

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="thead-dark">
                    <th>No</th>
                    <th>Nombre Completo</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <!--
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            -->
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
                        <!--
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                -->
                        <td>{{ $paciente->created_at->format('d-m-Y') }}</td>
                        <td>{{ $paciente->created_at->format('h:i a') }}</td>
                        <td class="text-capitalize">{{ $paciente->tipo == 'adios'? 'En casa': $paciente->tipo}}</td>
                        @if (Auth::user()->user_type == 'medico')
                            <td>
                                <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">

                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $pacientes->links() }}
    </div>

@endsection
