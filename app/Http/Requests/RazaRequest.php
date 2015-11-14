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
        //decimos que queremo 
        //y como lo queremos que sea necesario osea las 
        //reglas que queremos 
        return [
                'nombre' => 'required|unique:razas',
                'minutos_de_produccion_de_leche' => 'required',
                'dias_de_celo'=> 'required',
                'semanas_de_gestacion'=> 'required',
        ];
    }
}
