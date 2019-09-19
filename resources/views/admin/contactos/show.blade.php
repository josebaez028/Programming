@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contacto.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.id') }}
                        </th>
                        <td>
                            {{ $contacto->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.nombre') }}
                        </th>
                        <td>
                            {{ $contacto->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.telefono') }}
                        </th>
                        <td>
                            {{ $contacto->telefono }}
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