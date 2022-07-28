@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.car.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cars.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="manufacturer_id">{{ trans('cruds.car.fields.manufacturer_id') }}</label>
                <select class="form-control select2 {{ $errors->has('manufacturer_id') ? 'is-invalid' : '' }}" type="text" name="manufacturer_id" id="manufacturer_id" value="{{ old('manufacturer_id', '') }}" required>
                    @foreach($manufacturer_ids as $id => $entry)
                        <option value="{{ $id }}" {{ old('manufacturer_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('manufacturer_id'))
                    <span class="text-danger">{{ $errors->first('manufacturer_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.manufacturer_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="year_id">{{ trans('cruds.car.fields.year_id') }}</label>
                <select class="form-control {{ $errors->has('year_id') ? 'is-invalid' : '' }}" type="text" name="year_id" id="year_id" value="{{ old('year_id', '') }}" required>
                 @foreach($year_ids as $id => $entry)
                        <option value="{{ $id }}" {{ old('year_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('year_id'))
                    <span class="text-danger">{{ $errors->first('year_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.year_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="model_id">{{ trans('cruds.car.fields.model_id') }}</label>
                <select class="form-control {{ $errors->has('model_id') ? 'is-invalid' : '' }}" type="text" name="model_id" id="model_id" value="{{ old('model_id', '') }}" required>
                @foreach($model_ids as $id => $entry)
                        <option value="{{ $id }}" {{ old('model_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('model_id'))
                    <span class="text-danger">{{ $errors->first('model_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.model_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="color_id">{{ trans('cruds.car.fields.color_id') }}</label>
                <select class="form-control {{ $errors->has('color_id') ? 'is-invalid' : '' }}" type="text" name="color_id" id="color_id" value="{{ old('color_id', '') }}" required>
                @foreach($color_ids as $id => $entry)
                        <option value="{{ $id }}" {{ old('color_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('color_id'))
                    <span class="text-danger">{{ $errors->first('color_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.color_id_helper') }}</span>
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