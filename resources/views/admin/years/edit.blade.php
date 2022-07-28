@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.year.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.years.update", [$year->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
           
            <div class="form-group">
                <label class="required" for="year">{{ trans('cruds.year.fields.year') }}</label>
                <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="text" name='year_name'id="year" value="{{ old('year', $year->year) }}" required>
                @if($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.year.fields.year_helper') }}</span>
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