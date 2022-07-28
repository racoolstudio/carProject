@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.customer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.customer.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name">{{ trans('cruds.customer.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="" for="other_name">{{ trans('cruds.customer.fields.other_name') }}</label>
                <input class="form-control {{ $errors->has('other_name') ? 'is-invalid' : '' }}" type="text" name="other_name" id="other_name" value="{{ old('other_name', '') }}" >
                @if($errors->has('other_name'))
                    <span class="text-danger">{{ $errors->first('other_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.other_name_helper') }}</span>
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