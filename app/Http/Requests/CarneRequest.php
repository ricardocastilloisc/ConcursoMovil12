<?php

namespace ConcursoMovil12\Http\Requests;

use ConcursoMovil12\Http\Requests\Request;

class CarneRequest extends Request
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
                'animal_id' => 'required|unique:carnes',
                'fecha_de_muerte' => 'required',
                'libras_de_aprovechamiento' => 'required',
            //
        ];
    }
}
