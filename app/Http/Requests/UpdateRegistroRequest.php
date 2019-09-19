<?php

namespace App\Http\Requests;

use App\Registro;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRegistroRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registro_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
