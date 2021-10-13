<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TiendaRequest extends FormRequest
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
            'direccion' => 'required',
            'telefono' => 'required|unique:tiendas,telefono',
            'email' => 'required|unique:tiendas,email',
            'mapa' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'nombre.required'           => 'Este campo es obligatorio',
            'direccion.required'           => 'Este campo es obligatorio',
            'telefono.required'           => 'Este campo es obligatorio',
            'telefono.unique'           => 'Este telefono ya esta registrado',
            'email.required'           => 'Este campo es obligatorio',
            'email.unique'           => 'Este email ya esta registrado',
            'mapa.required'           => 'Este campo es obligatorio',
        ];
    }
}
