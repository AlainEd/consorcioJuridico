<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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

    protected $dates = [
        'fecha', 'hora'
    ];

    protected $cast = [
        'fecha' => 'datetime:Y-m-d',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (Auth::user()->id_rol) {
            return [
                'fecha' => 'required',
                'hora' => 'required',
            ];
        }else{
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
    }

    public function attributes()
    {
        return [
            'nombre_proceso' => '',
            'area' => '',
            'fecha' => '',
            'hora' => '',
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
            'fecha.required' => 'Asigne bien la fecha chupa pichi.'
        ];
    }
}
