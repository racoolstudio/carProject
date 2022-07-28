<?php

namespace App\Http\Requests;

use App\Models\Car;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCarRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('car_edit');
    }

    public function rules()
    {
        return [
            'manufacturer_id' => [
                'string',
                'required',
            ],
            'year_id' => [
                'string',
                'required',
            ],
            'model_id' => [
                'string',
                'required',
            ],
            'color_id' => [
                'string',
                'required',
            ],
        ];
    }
}
