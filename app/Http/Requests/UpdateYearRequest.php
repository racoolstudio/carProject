<?php

namespace App\Http\Requests;

use App\Models\Year;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateYearRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('car_edit');
    }

    public function rules()
    {
        return [
            'year_name' => [
                'string',
                'required',
            ],
      
        ];
    }
}
