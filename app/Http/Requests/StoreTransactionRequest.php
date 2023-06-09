<?php

namespace App\Http\Requests;

use App\Models\Transaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTransactionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('transaction_create');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'booking_id' => [
                'required',
                'integer',
            ],
            'payment_status' => [
                'required',
            ],
            'payment_amount' => [
                'required',
            ],
            'payment_method' => [
                'required',
            ],
            'payment_details' => [
                'string',
                'nullable',
            ],
        ];
    }
}
