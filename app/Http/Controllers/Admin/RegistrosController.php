<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyRegistroRequest;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Registro;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RegistrosController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Registro::query()->select(sprintf('%s.*', (new Registro)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'registro_show';
                $editGate      = 'registro_edit';
                $deleteGate    = 'registro_delete';
                $crudRoutePart = 'registros';

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
            $table->editColumn('fecha', function ($row) {
                return $row->fecha ? $row->fecha : "";
            });
            $table->editColumn('hora', function ($row) {
                return $row->hora ? $row->hora : "";
            });
            $table->editColumn('origen', function ($row) {
                return $row->origen ? $row->origen : "";
            });
            $table->editColumn('destino', function ($row) {
                return $row->destino ? $row->destino : "";
            });
            $table->editColumn('duracion', function ($row) {
                return $row->duracion ? $row->duracion : "";
            });
            $table->editColumn('codigo', function ($row) {
                return $row->codigo ? $row->codigo : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.registros.index');
    }

    public function create()
    {
        abort_if(Gate::denies('registro_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.create');
    }

    public function store(StoreRegistroRequest $request)
    {
        $registro = Registro::create($request->all());

        return redirect()->route('admin.registros.index');
    }

    public function edit(Registro $registro)
    {
        abort_if(Gate::denies('registro_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.edit', compact('registro'));
    }

    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->update($request->all());

        return redirect()->route('admin.registros.index');
    }

    public function show(Registro $registro)
    {
        abort_if(Gate::denies('registro_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.show', compact('registro'));
    }

    public function destroy(Registro $registro)
    {
        abort_if(Gate::denies('registro_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registro->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegistroRequest $request)
    {
        Registro::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
