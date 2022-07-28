<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyManufacturerRequest;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\Manufacturer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManufacturerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('manufacturer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manufacturers = Manufacturer::all();

        return view('admin.manufacturers.index', compact('manufacturers'));
    }

    public function create()
    {
        abort_if(Gate::denies('manufacturer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manufacturers.create');
    }

    public function store(StoreManufacturerRequest $request)
    {
        $manufacturer = Manufacturer::create($request->all());

        return redirect()->route('admin.manufacturers.index');
    }

    public function edit(Manufacturer $manufacturer)
    {
        abort_if(Gate::denies('manufacturer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manufacturers.edit', compact('manufacturer'));
    }

    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->all());

        return redirect()->route('admin.manufacturers.index');
    }

    public function show(Manufacturer $manufacturer)
    {
        abort_if(Gate::denies('manufacturer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manufacturers.show', compact('manufacturer'));
    }

    public function destroy(Manufacturer $manufacturer)
    {
        abort_if(Gate::denies('manufacturer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manufacturer->delete();

        return back();
    }

    public function massDestroy(MassDestroyManufacturerRequest $request)
    {
        Manufacturer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
