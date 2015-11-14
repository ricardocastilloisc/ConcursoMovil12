<?php
namespace ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Requests\Request;

class AnimalRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //poder hacer efectivo la autorización cuando se ejecute el programa
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //en request visualizamos que queremos que 
    //se guarde y como lo queremos que se guarde
    //casi todos los campos son requeridos 
    //pero hay uno en especial donde decimos 
    //que no pueda haber repetidos 
    //y se pone unique
    public function rules()
    {
        return [
                'nombre' => 'required',
                'arete' => 'required|unique:animales',
                'peso'=> 'required',
            //
        ];

    }
}
