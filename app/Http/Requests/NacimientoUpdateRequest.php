<?php

namespace ConcursoMovil12\Http\Requests;

use ConcursoMovil12\Http\Requests\Request;

class NacimientoUpdateRequest extends Request
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
                'arete' => 'required',
                'peso'=> 'required',
                'fecha_de_nacimiento'=> 'required',
            //
        ];
    }
}
