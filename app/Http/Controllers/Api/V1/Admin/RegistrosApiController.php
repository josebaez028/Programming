<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Http\Resources\Admin\RegistroResource;
use App\Registro;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrosApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registro_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegistroResource(Registro::all());
    }

    public function store(StoreRegistroRequest $request)
    {
        $registro = Registro::create($request->all());

        return (new RegistroResource($registro))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Registro $registro)
    {
        abort_if(Gate::denies('registro_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegistroResource($registro);
    }

    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->update($request->all());

        return (new RegistroResource($registro))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Registro $registro)
    {
        abort_if(Gate::denies('registro_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registro->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
