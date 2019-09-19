@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.registro.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.registros.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('fecha') ? 'has-error' : '' }}">
                <label for="fecha">{{ trans('cruds.registro.fields.fecha') }}</label>
                <input type="text" id="fecha" name="fecha" class="form-control" value="{{ old('fecha', isset($registro) ? $registro->fecha : '') }}">
                @if($errors->has('fecha'))
                    <em class="invalid-feedback">
                        {{ $errors->first('fecha') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.fecha_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('hora') ? 'has-error' : '' }}">
                <label for="hora">{{ trans('cruds.registro.fields.hora') }}</label>
                <input type="text" id="hora" name="hora" class="form-control" value="{{ old('hora', isset($registro) ? $registro->hora : '') }}">
                @if($errors->has('hora'))
                    <em class="invalid-feedback">
                        {{ $errors->first('hora') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.hora_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('origen') ? 'has-error' : '' }}">
                <label for="origen">{{ trans('cruds.registro.fields.origen') }}</label>
                <input type="text" id="origen" name="origen" class="form-control" value="{{ old('origen', isset($registro) ? $registro->origen : '') }}">
                @if($errors->has('origen'))
                    <em class="invalid-feedback">
                        {{ $errors->first('origen') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.origen_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('destino') ? 'has-error' : '' }}">
                <label for="destino">{{ trans('cruds.registro.fields.destino') }}</label>
                <input type="text" id="destino" name="destino" class="form-control" value="{{ old('destino', isset($registro) ? $registro->destino : '') }}">
                @if($errors->has('destino'))
                    <em class="invalid-feedback">
                        {{ $errors->first('destino') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.destino_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('duracion') ? 'has-error' : '' }}">
                <label for="duracion">{{ trans('cruds.registro.fields.duracion') }}</label>
                <input type="text" id="duracion" name="duracion" class="form-control" value="{{ old('duracion', isset($registro) ? $registro->duracion : '') }}">
                @if($errors->has('duracion'))
                    <em class="invalid-feedback">
                        {{ $errors->first('duracion') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.duracion_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : '' }}">
                <label for="codigo">{{ trans('cruds.registro.fields.codigo') }}</label>
                <input type="text" id="codigo" name="codigo" class="form-control" value="{{ old('codigo', isset($registro) ? $registro->codigo : '') }}">
                @if($errors->has('codigo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('codigo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.registro.fields.codigo_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection