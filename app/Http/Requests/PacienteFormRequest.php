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
            'inputNombre'=>'required|max:50',
            'inputSexo'=>'required',
            'inputEdad'=>'required|min:1',
            'inputTelefono'=>'required|max:10',
            'inputDireccion'=>'required|max:200',
            'pregunta1'=>'required',
            'pregunta2'=>'required',
            'pregunta3'=>'required',
            'pregunta4'=>'required',
            'pregunta5'=>'required',
            'pregunta6'=>'required',
            'pregunta7'=>'required',
        ];
    }
}
