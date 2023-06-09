<?php

namespace App\Http\Requests;

use App\Models\Asset;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAssetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('asset_edit');
    }

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            'make' => [
                'string',
                'nullable',
            ],
            'model' => [
                'string',
                'nullable',
            ],
            'year' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'required',
            ],
            'photos' => [
                'array',
            ],
            'amenities.*' => [
                'integer',
            ],
            'amenities' => [
                'array',
            ],
        ];
    }
}
