@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.manufacturer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.manufacturers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="manufacturer">{{ trans('cruds.manufacturer.fields.manufacturer') }}</label>
                <input class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" type="text" name="manufacturer_name" id="manufacturer" value="{{ old('manufacturer', '') }}" required>
                @if($errors->has('manufacturer'))
                    <span class="text-danger">{{ $errors->first('manufacturer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.manufacturer.fields.manufacturer_helper') }}</span>
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