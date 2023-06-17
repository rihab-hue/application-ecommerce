<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPapierRequest;
use App\Http\Requests\StorePapierRequest;
use App\Http\Requests\UpdatePapierRequest;
use App\Models\Papier;

class PapierController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('papier_access'), 403);

        $Papiers =Papier::all();

        return view('admin.papiers.index', compact('papiers'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('papier_create'), 403);

        return view('admin.papiers.create');
    }

    public function store(StorePapierRequest $request)
    {
        abort_unless(\Gate::allows('papier_create'), 403);

        $Papier =Papier::create($request->all());

        return redirect()->route('admin.papiers.index');
    }

    public function edit(Papier $Papier)
    {
        abort_unless(\Gate::allows('papier_edit'), 403);

        return view('admin.papiers.edit', compact('papier'));
    }

    public function update(UpdatePapierRequest $request,Papier $Papier)
    {
        abort_unless(\Gate::allows('papier_edit'), 403);

        $Papier->update($request->all());

        return redirect()->route('admin.papiers.index');
    }

    public function show(Papier $Papier)
    {
        abort_unless(\Gate::allows('papier_show'), 403);

        return view('admin.papiers.show', compact('papier'));
    }

    public function destroy(Papier $Papier)
    {
        abort_unless(\Gate::allows('papier_delete'), 403);

        $Papier->delete();

        return back();
    }

    public function massDestroy(MassDestroyPapierRequest $request)
    {
       Papier::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
