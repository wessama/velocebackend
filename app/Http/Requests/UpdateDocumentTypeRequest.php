<?php

namespace App\Http\Requests;

use App\Models\DocumentType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDocumentTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('document_type_edit');
    }

    public function rules()
    {
        return [
            'type' => [
                'string',
                'required',
                'unique:document_types,type,' . request()->route('document_type')->id,
            ],
        ];
    }
}
