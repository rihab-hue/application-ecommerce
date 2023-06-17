<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyImpressionRequest;
use App\Http\Requests\StoreImpressionRequest;
use App\Http\Requests\UpdateImpressionRequest;
use App\Models\Impression;

class ImpressionsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('impression_access'), 403);

        $impressions = Impression::all();

        return view('admin.impressions.index', compact('impressions'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('impression_create'), 403);

        return view('admin.impressions.create');
    }

    public function store(StoreImpressionRequest $request)
    {
        abort_unless(\Gate::allows('impression_create'), 403);

        $impression = Impression::create($request->all());

        return redirect()->route('admin.impressions.index');
    }

    public function edit(Impression $impression)
    {
        abort_unless(\Gate::allows('impression_edit'), 403);

        return view('admin.impressions.edit', compact('impression'));
    }

    public function update(UpdateImpressionRequest $request, Impression $impression)
    {
        abort_unless(\Gate::allows('impression_edit'), 403);

        $impression->update($request->all());

        return redirect()->route('admin.impressions.index');
    }

    public function show(Impression $impression)
    {
        abort_unless(\Gate::allows('impression_show'), 403);

        return view('admin.impressions.show', compact('impression'));
    }

    public function destroy(Impression $impression)
    {
        abort_unless(\Gate::allows('impression_delete'), 403);

        $impression->delete();

        return back();
    }

    public function massDestroy(MassDestroyImpressionRequest $request)
    {
        Impression::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
