@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.booking.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="asset_id">{{ trans('cruds.booking.fields.asset') }}</label>
                <select class="form-control select2 {{ $errors->has('asset') ? 'is-invalid' : '' }}" name="asset_id" id="asset_id" required>
                    @foreach($assets as $id => $entry)
                        <option value="{{ $id }}" {{ old('asset_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('asset'))
                    <div class="invalid-feedback">
                        {{ $errors->first('asset') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.asset_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="pickup_date">{{ trans('cruds.booking.fields.pickup_date') }}</label>
                <input class="form-control datetime {{ $errors->has('pickup_date') ? 'is-invalid' : '' }}" type="text" name="pickup_date" id="pickup_date" value="{{ old('pickup_date') }}" required>
                @if($errors->has('pickup_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pickup_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.pickup_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dropoff_date">{{ trans('cruds.booking.fields.dropoff_date') }}</label>
                <input class="form-control datetime {{ $errors->has('dropoff_date') ? 'is-invalid' : '' }}" type="text" name="dropoff_date" id="dropoff_date" value="{{ old('dropoff_date') }}" required>
                @if($errors->has('dropoff_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dropoff_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.dropoff_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pickup_location">{{ trans('cruds.booking.fields.pickup_location') }}</label>
                <input class="form-control {{ $errors->has('pickup_location') ? 'is-invalid' : '' }}" type="text" name="pickup_location" id="pickup_location" value="{{ old('pickup_location', '') }}">
                @if($errors->has('pickup_location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pickup_location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.pickup_location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dropoff_location">{{ trans('cruds.booking.fields.dropoff_location') }}</label>
                <input class="form-control {{ $errors->has('dropoff_location') ? 'is-invalid' : '' }}" type="text" name="dropoff_location" id="dropoff_location" value="{{ old('dropoff_location', '') }}">
                @if($errors->has('dropoff_location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dropoff_location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.dropoff_location_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('canceled') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="canceled" value="0">
                    <input class="form-check-input" type="checkbox" name="canceled" id="canceled" value="1" {{ old('canceled', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="canceled">{{ trans('cruds.booking.fields.canceled') }}</label>
                </div>
                @if($errors->has('canceled'))
                    <div class="invalid-feedback">
                        {{ $errors->first('canceled') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.canceled_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('refunded') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="refunded" value="0">
                    <input class="form-check-input" type="checkbox" name="refunded" id="refunded" value="1" {{ old('refunded', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="refunded">{{ trans('cruds.booking.fields.refunded') }}</label>
                </div>
                @if($errors->has('refunded'))
                    <div class="invalid-feedback">
                        {{ $errors->first('refunded') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.refunded_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.booking.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Booking::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.status_helper') }}</span>
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