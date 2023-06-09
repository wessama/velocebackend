@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.asset.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.id') }}
                        </th>
                        <td>
                            {{ $asset->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.category') }}
                        </th>
                        <td>
                            {{ $asset->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.make') }}
                        </th>
                        <td>
                            {{ $asset->make }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.model') }}
                        </th>
                        <td>
                            {{ $asset->model }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.year') }}
                        </th>
                        <td>
                            {{ $asset->year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.name') }}
                        </th>
                        <td>
                            {{ $asset->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.photos') }}
                        </th>
                        <td>
                            @foreach($asset->photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.notes') }}
                        </th>
                        <td>
                            {!! $asset->notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.assigned_to') }}
                        </th>
                        <td>
                            {{ $asset->assigned_to->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.price') }}
                        </th>
                        <td>
                            {{ $asset->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.amenity') }}
                        </th>
                        <td>
                            @foreach($asset->amenities as $key => $amenity)
                                <span class="label label-info">{{ $amenity->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#asset_bookings" role="tab" data-toggle="tab">
                {{ trans('cruds.booking.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="asset_bookings">
            @includeIf('admin.assets.relationships.assetBookings', ['bookings' => $asset->assetBookings])
        </div>
    </div>
</div>

@endsection