<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputNombre' => 'required|max:50',
            'inputSexo' => 'required',
            'inputEdad' => 'required|min:1|integer',
            'inputTelefono' => 'required|min:8|max:10',
            'inputDireccion' => 'required|max:200',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'inputNombre.required' => 'Ingresa el nombre',
            'inputSexo.required' => 'Selecciona el sexo',
            'inputEdad.required' => 'Ingresa la edad',
            'inputEdad.min' => 'La edad mínima es 0',
            'inputEdad.integer' => 'La edad debe ser un entero',
            'inputEdad.min' => 'Edad incorrecta',
            'inputTelefono.required' => 'Ingresa el teléfono',
            'inputTelefono.min' => 'El número de teléfono es muy corto',
            'inputTelefono.max' => 'El número de teléfono es muy largo',
            'inputDireccion.required' => 'Ingresa la dirección',
        ];
    }
}
