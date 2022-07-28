<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCarRequest;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Color;
use App\Models\Manufacturer;
use App\Models\ModelName;
use App\Models\Year;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('car_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cars = Car::all();
        $cars->load('manufacturer', 'model', 'color', 'year');

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        abort_if(Gate::denies('car_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manufacturer_ids = Manufacturer::pluck('manufacturer_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $model_ids = ModelName::pluck('model_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $color_ids = Color::pluck('color_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $year_ids = Year::pluck('year_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        return view('admin.cars.create', compact('manufacturer_ids', 'model_ids', 'color_ids', 'year_ids'));
    }

    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->all());

        return redirect()->route('admin.cars.index');
    }

    public function edit(Car $car)
    {
        abort_if(Gate::denies('car_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manufacturer_ids = Manufacturer::pluck('manufacturer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $model_ids = ModelName::pluck('model_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $color_ids = Color::pluck('color_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $year_ids = Year::pluck('year_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $car->load('manufacturer', 'model', 'color', 'year');

        return view('admin.cars.edit', compact('car', 'manufacturer_ids', 'model_ids', 'color_ids', 'year_ids'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->all());

        return redirect()->route('admin.cars.index');
    }

    public function show(Car $car)
    {
        abort_if(Gate::denies('car_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    
        $car->load('manufacturer', 'model', 'color', 'year');
    
        return view('admin.cars.show', compact('car'));
    }

    public function destroy(Car $car)
    {
        abort_if(Gate::denies('car_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $car->delete();

        return back();
    }

    public function massDestroy(MassDestroyCarRequest $request)
    {
        Car::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
