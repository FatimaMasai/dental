<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'carnet_identidad' => 'required',
            'fecha_nac' => 'required',
            'sexo' => 'required',
            'celular' => 'required',
            'email' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Name is Must',
            'apellido_paterno.min' => 'Name Must be 5 Chr.',
        ];
    }
}
