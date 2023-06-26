<?php

namespace App\Http\Requests\Frontend;

use App\Models\AssetCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'asset_category' => [
                'nullable',
                'string',
                //Rule::in(AssetCategory::all()->pluck('name')->toArray())
            ],
            'colors' => [
                'nullable',
                'array',
            ],
            'colors.*' => [
                'string',
                //Rule::in(['silver', 'black', 'white', 'red'])
            ],
            'sort' => [
                'nullable',
                'string',
                //Rule::in(['default', 'asc', 'desc', 'high-to-low', 'low-to-high'])
            ],
        ];
    }
}
