@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 margin-tb">
                <table class="default">
                <hr class="my-3">
                <tr>
                    <th><h2>Detalles del paciente</h2></th>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <td>{{$paciente->nombre}}</td>
                </tr>
                <tr>
                    <th>Edad</th>
                    <td>{{$paciente->edad}}</td>
                </tr>
                <tr>
                    <th>Sexo</th>
                    <td>{{$paciente->sexo}}</td>
                </tr>
                <tr>
                    <th>Direccion</th>
                    <td>{{$paciente->direccion}}</td>
                </tr>
                <tr>
                    <th>Telofono</th>
                    <td>{{$paciente->telefono}}</td>
                </tr>
                <tr>
                    <th>Tipo de atención</th>
                    <td>{{ $paciente->tipo == 'adios'? 'En casa': $paciente->tipo}}</td>
                </tr>
            </table>
                <div class="pull-right">
                    <a class="btn btn-link my-4" href="{{ route('registros.index') }}">&laquo; Atrás</a>
                </div>
            </div>

        </div>
    </div>
@endsection
