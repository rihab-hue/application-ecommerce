<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPelliculageRequest;
use App\Http\Requests\StorePelliculageRequest;
use App\Http\Requests\UpdatePelliculageRequest;
use App\Models\Pelliculage;

class PelliculagesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('pelliculage_access'), 403);

        $pelliculages = Pelliculage::all();

        return view('admin.pelliculages.index', compact('pelliculages'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('pelliculage_create'), 403);

        return view('admin.pelliculages.create');
    }

    public function store(StorePelliculageRequest $request)
    {
        abort_unless(\Gate::allows('pelliculage_create'), 403);

        $pelliculage = Pelliculage::create($request->all());

        return redirect()->route('admin.pelliculages.index');
    }

    public function edit(Pelliculage $pelliculage)
    {
        abort_unless(\Gate::allows('pelliculage_edit'), 403);

        return view('admin.pelliculages.edit', compact('pelliculage'));
    }

    public function update(UpdatePelliculageRequest $request, Pelliculage $pelliculage)
    {
        abort_unless(\Gate::allows('pelliculage_edit'), 403);

        $pelliculage->update($request->all());

        return redirect()->route('admin.pelliculages.index');
    }

    public function show(Pelliculage $pelliculage)
    {
        abort_unless(\Gate::allows('pelliculage_show'), 403);

        return view('admin.pelliculages.show', compact('pelliculage'));
    }

    public function destroy(Pelliculage $pelliculage)
    {
        abort_unless(\Gate::allows('pelliculage_delete'), 403);

        $pelliculage->delete();

        return back();
    }

    public function massDestroy(MassDestroyPelliculageRequest $request)
    {
        Pelliculage::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
