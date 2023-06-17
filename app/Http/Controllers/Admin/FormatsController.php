<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFormatRequest;
use App\Http\Requests\StoreFormatRequest;
use App\Http\Requests\UpdateFormatRequest;
use App\Models\Format;

class FormatsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('format_access'), 403);

        $formats = Format::all();

        return view('admin.formats.index', compact('formats'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('format_create'), 403);

        return view('admin.formats.create');
    }

    public function store(StoreFormatRequest $request)
    {
        abort_unless(\Gate::allows('format_create'), 403);

        $format = Format::create($request->all());

        return redirect()->route('admin.formats.index');
    }

    public function edit(Format $format)
    {
        abort_unless(\Gate::allows('format_edit'), 403);

        return view('admin.formats.edit', compact('format'));
    }

    public function update(UpdateFormatRequest $request, Format $format)
    {
        abort_unless(\Gate::allows('format_edit'), 403);

        $format->update($request->all());

        return redirect()->route('admin.formats.index');
    }

    public function show(Format $format)
    {
        abort_unless(\Gate::allows('format_show'), 403);

        return view('admin.formats.show', compact('format'));
    }

    public function destroy(Format $format)
    {
        abort_unless(\Gate::allows('format_delete'), 403);

        $format->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormatRequest $request)
    {
        Format::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
