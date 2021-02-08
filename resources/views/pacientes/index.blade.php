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
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-hover table-striped text-center">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nombre Completo</th>
                <th>Tipo de Urgencia</th>
                <th>Acciones</th>
            </thead>
            @foreach ($pacientes as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->nombre }}</td>
                    <td class="text-capitalize">{{ $product->tipo }}</td>
                    <td>
                        <form action="{{ route('pacientes.destroy', $product->id) }}" method="POST">

                            <a class="btn btn-warning" href="{{ route('pacientes.edit', $product->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $pacientes->links() !!}
    </div>

@endsection
