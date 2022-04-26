<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProceso extends FormRequest
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
            'nombre_proceso' => 'required',
            'area' => 'required',
            'nombre_demandante' => 'required',
            'ci_demandante' => 'required',
            'telefono' => 'required',
            'nombre_demandado' => 'required',
            'ci_demandado' => 'required',

        ];
    }

    public function attributes()
    {
        return [
            'nombre_proceso' => '',
            'area' => '',
            'nombre_demandante' => '',
            'ci_demandante' => '',
            'nombre_demandado' => '',
            'ci_demandado' => '',
        ];
    }

    public function messages()
    {
        return [
            'nombre_proceso.required' => 'Debe asignarle un nombre al proceso',
        ];
    }
}
