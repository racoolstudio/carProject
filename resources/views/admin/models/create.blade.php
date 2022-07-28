@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.model.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.models.store") }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="required" for="model">{{ trans('cruds.model.fields.model') }}</label>
                <input class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" type="text" name= 'model_name' id="model" value="{{ old('model', '') }}" required>
                @if($errors->has('model'))
                    <span class="text-danger">{{ $errors->first('model') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.model.fields.model_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection