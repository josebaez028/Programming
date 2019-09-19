@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.registro.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.id') }}
                        </th>
                        <td>
                            {{ $registro->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.fecha') }}
                        </th>
                        <td>
                            {{ $registro->fecha }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.hora') }}
                        </th>
                        <td>
                            {{ $registro->hora }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.origen') }}
                        </th>
                        <td>
                            {{ $registro->origen }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.destino') }}
                        </th>
                        <td>
                            {{ $registro->destino }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.duracion') }}
                        </th>
                        <td>
                            {{ $registro->duracion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.codigo') }}
                        </th>
                        <td>
                            {{ $registro->codigo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.fecha_larga') }}
                        </th>
                        <td>
                            {{ $registro->fecha_larga }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.created_at') }}
                        </th>
                        <td>
                            {{ $registro->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.updated_at') }}
                        </th>
                        <td>
                            {{ $registro->updated_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registro.fields.deleted_at') }}
                        </th>
                        <td>
                            {{ $registro->deleted_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection