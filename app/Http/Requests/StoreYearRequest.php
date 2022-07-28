<?php

namespace App\Http\Requests;

use App\Models\Year;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreYearRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('year_create');
    }

    public function rules()
    {
        return [

            'year_name' => [
                'string',
                'required',
            ]
        ];
    }
}
