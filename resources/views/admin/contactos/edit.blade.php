@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contacto.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.contactos.update", [$contacto->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                <label for="nombre">{{ trans('cruds.contacto.fields.nombre') }}*</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', isset($contacto) ? $contacto->nombre : '') }}" required>
                @if($errors->has('nombre'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nombre') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contacto.fields.nombre_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
                <label for="telefono">{{ trans('cruds.contacto.fields.telefono') }}*</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono', isset($contacto) ? $contacto->telefono : '') }}" required>
                @if($errors->has('telefono'))
                    <em class="invalid-feedback">
                        {{ $errors->first('telefono') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contacto.fields.telefono_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection