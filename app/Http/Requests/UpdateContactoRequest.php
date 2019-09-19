<?php

namespace App\Http\Requests;

use App\Contacto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateContactoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contacto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'nombre'   => [
                'required',
            ],
            'telefono' => [
                'required',
                'unique:contactos,telefono,' . request()->route('contacto')->id,
            ],
        ];
    }
}
