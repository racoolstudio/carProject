<?php

namespace App\Http\Requests;

use App\Models\Manufacturer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyManufacturerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manufacturer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:manufacturers,id',
        ];
    }
}