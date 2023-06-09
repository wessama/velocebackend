@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.document.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.documents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.id') }}
                        </th>
                        <td>
                            {{ $document->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.user') }}
                        </th>
                        <td>
                            {{ $document->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.comments') }}
                        </th>
                        <td>
                            {{ $document->comments }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.verified') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $document->verified ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.document') }}
                        </th>
                        <td>
                            @if($document->document)
                                <a href="{{ $document->document->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $document->document->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.document_type') }}
                        </th>
                        <td>
                            {{ $document->document_type->type ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.documents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection