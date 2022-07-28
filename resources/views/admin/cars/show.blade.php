@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.car.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.manufacturer_id') }}
                        </th>
                        <td>
                            {{ $car->manufacturer_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.year_id') }}
                        </th>
                        <td>
                            {{ $car->year_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.model_id') }}
                        </th>
                        <td>
                            {{ $car->model_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.color_id') }}
                        </th>
                        <td>
                            {{ $car->color_id }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection