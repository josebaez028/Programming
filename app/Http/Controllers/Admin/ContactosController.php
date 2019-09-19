<?php

namespace App\Http\Controllers\Admin;

use App\Contacto;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyContactoRequest;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ContactosController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Contacto::query()->select(sprintf('%s.*', (new Contacto)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'contacto_show';
                $editGate      = 'contacto_edit';
                $deleteGate    = 'contacto_delete';
                $crudRoutePart = 'contactos';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('nombre', function ($row) {
                return $row->nombre ? $row->nombre : "";
            });
            $table->editColumn('telefono', function ($row) {
                return $row->telefono ? $row->telefono : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.contactos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contacto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.create');
    }

    public function store(StoreContactoRequest $request)
    {
        $contacto = Contacto::create($request->all());

        return redirect()->route('admin.contactos.index');
    }

    public function edit(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.edit', compact('contacto'));
    }

    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        $contacto->update($request->all());

        return redirect()->route('admin.contactos.index');
    }

    public function show(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.show', compact('contacto'));
    }

    public function destroy(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacto->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactoRequest $request)
    {
        Contacto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
