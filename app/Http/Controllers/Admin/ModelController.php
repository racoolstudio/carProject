<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyModelRequest;
use App\Http\Requests\StoreModelRequest;
use App\Http\Requests\UpdateModelRequest;
use App\Models\ModelName;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('model_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $models = ModelName::all();

        return view('admin.models.index', compact('models'));
    }

    public function create()
    {
        abort_if(Gate::denies('model_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.models.create');
    }

    public function store(StoreModelRequest $request)
    {
        $model = ModelName::create($request->all());

        return redirect()->route('admin.models.index');
    }

    public function edit(ModelName $model)
    {
        abort_if(Gate::denies('model_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.models.edit', compact('model'));
    }

    public function update(UpdateModelRequest $request, ModelName $model)
    {
        $model->update($request->all());

        return redirect()->route('admin.models.index');
    }

    public function show(ModelName $model)
    {
        abort_if(Gate::denies('model_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.models.show', compact('model'));
    }

    public function destroy(ModelName $model)
    {
        abort_if(Gate::denies('model_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model->delete();

        return back();
    }

    public function massDestroy(MassDestroyModelRequest $request)
    {
        Model::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
