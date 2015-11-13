<?php

namespace ConcursoMovil12\Http\Requests;

use ConcursoMovil12\Http\Requests\Request;

class RazaRequest extends Request
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
                'nombre' => 'required|unique:razas',
                'minutos_de_produccion_de_leche' => 'required',
                'meses_de_celo'=> 'required',
                'meses_de_gestacion'=> 'required',
        ];
    }
}
