<?php

namespace ConcursoMovil12\Http\Requests;

use ConcursoMovil12\Http\Requests\Request;

class RazaUpdateRequest extends Request
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
        //como queremos que 
        //sea obligatorio
        return [
                'nombre' => 'required',
                'dias_de_celo'=> 'required',
                'semanas_de_gestacion'=> 'required',
            //
        ];
    }
}
