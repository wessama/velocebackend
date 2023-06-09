<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDocumentRequest;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DocumentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $documents = Document::with(['user', 'document_type', 'media'])->get();

        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        abort_if(Gate::denies('document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document_types = DocumentType::pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.documents.create', compact('document_types', 'users'));
    }

    public function store(StoreDocumentRequest $request)
    {
        $document = Document::create($request->all());

        if ($request->input('document', false)) {
            $document->addMedia(storage_path('tmp/uploads/' . basename($request->input('document'))))->toMediaCollection('document');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $document->id]);
        }

        return redirect()->route('admin.documents.index');
    }

    public function edit(Document $document)
    {
        abort_if(Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document_types = DocumentType::pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document->load('user', 'document_type');

        return view('admin.documents.edit', compact('document', 'document_types', 'users'));
    }

    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document->update($request->all());

        if ($request->input('document', false)) {
            if (! $document->document || $request->input('document') !== $document->document->file_name) {
                if ($document->document) {
                    $document->document->delete();
                }
                $document->addMedia(storage_path('tmp/uploads/' . basename($request->input('document'))))->toMediaCollection('document');
            }
        } elseif ($document->document) {
            $document->document->delete();
        }

        return redirect()->route('admin.documents.index');
    }

    public function show(Document $document)
    {
        abort_if(Gate::denies('document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $document->load('user', 'document_type');

        return view('admin.documents.show', compact('document'));
    }

    public function destroy(Document $document)
    {
        abort_if(Gate::denies('document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $document->delete();

        return back();
    }

    public function massDestroy(MassDestroyDocumentRequest $request)
    {
        $documents = Document::find(request('ids'));

        foreach ($documents as $document) {
            $document->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('document_create') && Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Document();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
