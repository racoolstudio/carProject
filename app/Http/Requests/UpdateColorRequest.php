<?php

namespace App\Http\Requests;

use App\Models\Color;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateColorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('color_edit');
    }

    public function rules()
    {
        return [
            'color_name' => [
                'string',
                'required',
            ],
        ];
    }
}
