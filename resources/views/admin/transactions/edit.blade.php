@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.transaction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.transactions.update", [$transaction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.transaction.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $transaction->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="booking_id">{{ trans('cruds.transaction.fields.booking') }}</label>
                <select class="form-control select2 {{ $errors->has('booking') ? 'is-invalid' : '' }}" name="booking_id" id="booking_id" required>
                    @foreach($bookings as $id => $entry)
                        <option value="{{ $id }}" {{ (old('booking_id') ? old('booking_id') : $transaction->booking->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('booking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('booking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.booking_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.transaction.fields.payment_status') }}</label>
                <select class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" name="payment_status" id="payment_status" required>
                    <option value disabled {{ old('payment_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Transaction::PAYMENT_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_status', $transaction->payment_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.payment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_amount">{{ trans('cruds.transaction.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', $transaction->payment_amount) }}" step="0.01" required>
                @if($errors->has('payment_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.transaction.fields.payment_method') }}</label>
                <select class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method" required>
                    <option value disabled {{ old('payment_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Transaction::PAYMENT_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_method', $transaction->payment_method) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_details">{{ trans('cruds.transaction.fields.payment_details') }}</label>
                <input class="form-control {{ $errors->has('payment_details') ? 'is-invalid' : '' }}" type="text" name="payment_details" id="payment_details" value="{{ old('payment_details', $transaction->payment_details) }}">
                @if($errors->has('payment_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.payment_details_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection