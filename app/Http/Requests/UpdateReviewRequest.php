<?php

namespace App\Http\Requests;

use App\Models\Review;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('review_edit');
    }

    public function rules()
    {
        return [
            'asset_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'rating' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'rating_breakdown' => [
                'string',
                'nullable',
            ],
        ];
    }
}
