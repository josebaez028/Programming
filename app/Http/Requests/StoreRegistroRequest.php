<?php

namespace App\Http\Requests;

use App\Registro;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRegistroRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registro_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
