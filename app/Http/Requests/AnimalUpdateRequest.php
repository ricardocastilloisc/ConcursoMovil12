<?php

namespace ConcursoMovil12\Http\Requests;

use ConcursoMovil12\Http\Requests\Request;

class AnimalUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //autorizamos 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //igual los parametros que quermos que sean 
        //necesario al momento de
        //guardar
        return [
                'nombre' => 'required',
                'arete' => 'required',
                'peso'=> 'required',
            //
        ];
    }
}
