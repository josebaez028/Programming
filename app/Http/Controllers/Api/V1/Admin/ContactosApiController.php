<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Contacto;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Http\Resources\Admin\ContactoResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactosApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contacto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactoResource(Contacto::all());
    }

    public function store(StoreContactoRequest $request)
    {
        $contacto = Contacto::create($request->all());

        return (new ContactoResource($contacto))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactoResource($contacto);
    }

    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        $contacto->update($request->all());

        return (new ContactoResource($contacto))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacto->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
