<?php

namespace App\Http\Requests;

use App\Models\ModelName;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreModelRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('model_create');
    }

    public function rules()
    {
        return [
        
            'model_name' => [
                'string',
                'required',
            ],
    
        ];
    }
}
