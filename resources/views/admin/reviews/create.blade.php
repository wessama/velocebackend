@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.review.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.reviews.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="asset_id">{{ trans('cruds.review.fields.asset') }}</label>
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
                <span class="help-block">{{ trans('cruds.review.fields.asset_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.review.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.review.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rating">{{ trans('cruds.review.fields.rating') }}</label>
                <input class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" type="number" name="rating" id="rating" value="{{ old('rating', '') }}" step="1">
                @if($errors->has('rating'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rating') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.rating_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rating_breakdown">{{ trans('cruds.review.fields.rating_breakdown') }}</label>
                <input class="form-control {{ $errors->has('rating_breakdown') ? 'is-invalid' : '' }}" type="text" name="rating_breakdown" id="rating_breakdown" value="{{ old('rating_breakdown', '') }}">
                @if($errors->has('rating_breakdown'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rating_breakdown') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.rating_breakdown_helper') }}</span>
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