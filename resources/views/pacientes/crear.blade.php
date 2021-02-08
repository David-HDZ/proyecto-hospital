@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('pacientes.store') }}" role="form">
                    @csrf
                    <h2 class="text-center my-4"> Registro de pacientes </h2>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputSexo">Sexo</label>
                            <select id="inputSexo" name="inputSexo" class="form-control" required>
                                <option value="H"> Hombre </option>
                                <option value="M"> Mujer </option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEdad">Edad</label>
                            <input type="number" class="form-control" id="inputEdad" name="inputEdad" required min="1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTelefono">Telefono</label>
                            <input type="phone" class="form-control" id="inputTelefono" placeholder="5534235175"
                                name="inputTelefono" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Direccion</label>
                            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" required>
                        </div>

                    </div>

                    <h2 class="text-left my-4"> Preguntas </h2>
                    <!-- FORMULARIO -->
                    <div class="form-group row text-left">
                        <label for="pregunta1"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido fiebre?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta1" id="fiebre1" value="0"
                                checked>
                            <label class="form-check-label" for="fiebre1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta1" id="fiebre2" value="2">
                            <label class="form-check-label" for="fiebre2">Sí (= 38) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta1" id="fiebre3" value="3">
                            <label class="form-check-label" for="fiebre3">Sí (>= 39)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta2"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido dolor de cabeza?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta2" id="cabeza1" value="0"
                                checked>
                            <label class="form-check-label" for="cabeza1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta2" id="cabeza2" value="2">
                            <label class="form-check-label" for="cabeza2">Sí (moderado) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta2" id="cabeza3" value="3">
                            <label class="form-check-label" for="cabeza3">Sí (alto)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta3"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido dificultad para respirar?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta3" id="respirar1" value="0"
                                checked>
                            <label class="form-check-label" for="respirar1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta3" id="respirar2" value="2">
                            <label class="form-check-label" for="respirar2">Sí (moderado) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta3" id="respirar3" value="3">
                            <label class="form-check-label" for="respirar3">Sí (alto)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta4"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido dolor de huesos?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta4" id="huesos1" value="0"
                                checked>
                            <label class="form-check-label" for="huesos1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta4" id="huesos2" value="2">
                            <label class="form-check-label" for="huesos2">Sí (moderado) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta4" id="huesos3" value="3">
                            <label class="form-check-label" for="huesos3">Sí (alto)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta5"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido cansancio?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta5" id="cansancio1" value="0"
                                checked>
                            <label class="form-check-label" for="cansancio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta5" id="cansancio2" value="2">
                            <label class="form-check-label" for="cansancio2">Sí (moderado) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta5" id="cansancio3" value="3">
                            <label class="form-check-label" for="cansancio3">Sí (alto)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta6"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido flujo nasal?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta6" id="flujo1" value="0"
                                checked>
                            <label class="form-check-label" for="flujo1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta6" id="flujo2" value="2">
                            <label class="form-check-label" for="flujo2">Sí (moderado) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta6" id="flujo3" value="3">
                            <label class="form-check-label" for="flujo3">Sí (alto)</label>
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="pregunta7"
                            class="col-md-4 col-form-label text-md-right">{{ __('¿Tiene o ha tenido alergias?') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta7" id="alergia1" value="0"
                                checked>
                            <label class="form-check-label" for="alergia1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta7" id="alergia2" value="2">
                            <label class="form-check-label" for="alergia2">Si (alimentos) </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-5" type="radio" name="pregunta7" id="alergia3" value="3">
                            <label class="form-check-label" for="alergia3">Si (medicamentos)</label>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <button type="submit" class="btn btn-primary mx-auto">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
