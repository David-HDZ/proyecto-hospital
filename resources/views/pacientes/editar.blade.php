@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 margin-tb">
                <div class="pull-left">
                    <h2>Edit paciente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-link my-4" href="{{ route('pacientes.index') }}">&laquo; Atrás</a>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Nombre Completo</label>
                            <input type="text" value="{{ $paciente->nombre }}"
                                class="form-control @error('inputNombre') is-invalid @enderror" id="inputNombre"
                                name="inputNombre">
                            @error('inputNombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputSexo">Sexo</label>
                            <select id="inputSexo" name="inputSexo"
                                class="form-control @error('inputSexo') is-invalid @enderror">
                                <option value="H" @if ($paciente->sexo == 'H') selected @endif>Hombre </option>
                                <option value="M" @if ($paciente->sexo == 'M') selected @endif>Mujer </option>
                            </select>
                            @error('inputSexo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEdad">Edad</label>
                            <input type="text" value="{{ $paciente->edad }}"
                                class="form-control @error('inputEdad') is-invalid @enderror" id="inputEdad"
                                name="inputEdad" min="1">
                            @error('inputEdad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTelefono">Telefono</label>
                            <input type="tel" value="{{ $paciente->telefono }}"
                                class="form-control @error('inputTelefono') is-invalid @enderror" id="inputTelefono"
                                placeholder="5534235175" name="inputTelefono">
                            @error('inputTelefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Direccion</label>
                            <input type="text" value="{{ $paciente->direccion }}"
                                class="form-control @error('inputDireccion') is-invalid @enderror" id="inputDireccion"
                                name="inputDireccion">
                            @error('inputDireccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 text-center my-4">
                        <button type="submit" class="btn btn-warning px-5">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
