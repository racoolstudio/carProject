<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyYearRequest;
use App\Http\Requests\StoreYearRequest;
use App\Http\Requests\UpdateYearRequest;
use App\Models\Year;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class YearController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('year_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $years = Year::all();

        return view('admin.years.index', compact('years'));
    }

    public function create()
    {
        abort_if(Gate::denies('year_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.years.create');
    }

    public function store(StoreYearRequest $request)
    {
        $year = Year::create($request->all());

        return redirect()->route('admin.years.index');
    }

    public function edit(Year $year)
    {
        abort_if(Gate::denies('year_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.years.edit', compact('year'));
    }

    public function update(UpdateYearRequest $request, Year $year)
    {
        $year->update($request->all());

        return redirect()->route('admin.years.index');
    }

    public function show(Year $year)
    {
        abort_if(Gate::denies('year_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.years.show', compact('year'));
    }

    public function destroy(Year $year)
    {
        abort_if(Gate::denies('year_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $year->delete();

        return back();
    }

    public function massDestroy(MassDestroyYearRequest $request)
    {
        Year::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
