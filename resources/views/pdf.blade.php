<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 text-capitalize">
                <span><strong>Fecha consulta:</strong> {{ date('d-m-Y') }}</span>
                @if (!empty(Request::only('sexo')['sexo']))
                    <br />
                    <span><strong>Sexo:</strong> {{ Request::only('sexo')['sexo'] }}</span>
                @endif
                @if (!empty(Request::only('edad')['edad']))
                    <br />
                    <span><strong>Edad:</strong> @switch(Request::only('edad')['edad'])
                            @case(1)
                            Niños
                            @break
                            @case(2)
                            Jovenes
                            @break
                            @case(3)
                            Adultos
                            @break
                            @case(4)
                            Ancianos
                            @break
                            @default
                            Todos
                        @endswitch</span>
                @endif
                @if (!empty(Request::only('tipo')['tipo']))
                    <br />
                    <span><strong>Tipo:</strong> {{ Request::only('tipo')['tipo'] }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Fecha de registro</th>
                            <th>Hora de registro</th>
                            <th>Tipo de Urgencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <th>{{ $paciente->id }}</th>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->sexo }}</td>
                                <td>{{ $paciente->edad }}</td>
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                <td>{{ $paciente->created_at->format('d-m-Y') }}</td>
                                <td>{{ $paciente->created_at->format('h:i a') }}</td>
                                <td class="text-capitalize">
                                    {{ $paciente->tipo == 'adios' ? 'En casa' : $paciente->tipo }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
