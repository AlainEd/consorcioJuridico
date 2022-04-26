<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcesoStore extends FormRequest
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
            'nombre' => 'required',
            'area' => 'required',
            'estado' => 'required',
            'fecha',
            'hora',
            'fecha_cierre',
            'id_abogado' => 'required',
            'id_juez',
            'id_cliente' => 'required',
            'id_juzgado',
            'nombre_demandante' => 'required',
            'ci_demandante' => 'required',
            'nombre_demandado' => 'required',
            'ci_demandado' => 'required',
            'determinacion',
        ];
    }
}
