@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.color.title_singular') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.colors.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="color">{{ trans('cruds.color.fields.color') }}</label>
                <input class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" type="text" name='color_name' id="color" value="{{ old('color', '') }}" required>
                @if($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('color') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.color.fields.color_helper') }}</span>
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