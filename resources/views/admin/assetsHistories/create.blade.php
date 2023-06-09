@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.assetsHistory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.assets-histories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="mileage">{{ trans('cruds.assetsHistory.fields.mileage') }}</label>
                <input class="form-control {{ $errors->has('mileage') ? 'is-invalid' : '' }}" type="number" name="mileage" id="mileage" value="{{ old('mileage', '0') }}" step="1" required>
                @if($errors->has('mileage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mileage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.assetsHistory.fields.mileage_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fuel_indicator">{{ trans('cruds.assetsHistory.fields.fuel_indicator') }}</label>
                <input class="form-control {{ $errors->has('fuel_indicator') ? 'is-invalid' : '' }}" type="number" name="fuel_indicator" id="fuel_indicator" value="{{ old('fuel_indicator', '0') }}" step="1" required>
                @if($errors->has('fuel_indicator'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fuel_indicator') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.assetsHistory.fields.fuel_indicator_helper') }}</span>
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