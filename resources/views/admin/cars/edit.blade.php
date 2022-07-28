@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.car.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cars.update", [$car->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="manufacturer_id">{{ trans('cruds.car.fields.manufacturer_id') }}</label>
                <input class="form-control {{ $errors->has('manufacturer_id') ? 'is-invalid' : '' }}" type="text" name="manufacturer_id" id="manufacturer_id" value="{{ old('manufacturer_id', $car->manufacturer_id) }}" required>
                @if($errors->has('manufacturer_id'))
                    <span class="text-danger">{{ $errors->first('manufacturer_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.manufacturer_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="year_id">{{ trans('cruds.car.fields.year_id') }}</label>
                <input class="form-control {{ $errors->has('year_id') ? 'is-invalid' : '' }}" type="text" name="year_id" id="year_id" value="{{ old('year_id', $car->year_id) }}" required>
                @if($errors->has('year_id'))
                    <span class="text-danger">{{ $errors->first('year_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.year_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="model_id">{{ trans('cruds.car.fields.model_id') }}</label>
                <input class="form-control {{ $errors->has('model_id') ? 'is-invalid' : '' }}" type="text" name="model_id" id="model_id" value="{{ old('model_id', $car->model_id) }}" required>
                @if($errors->has('model_id'))
                    <span class="text-danger">{{ $errors->first('model_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.model_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="color_id">{{ trans('cruds.car.fields.color_id') }}</label>
                <input class="form-control {{ $errors->has('color_id') ? 'is-invalid' : '' }}" type="text" name="color_id" id="color_id" value="{{ old('color_id', $car->color_id) }}" required>
                @if($errors->has('color_id'))
                    <span class="text-danger">{{ $errors->first('color_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.color_helper') }}</span>
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