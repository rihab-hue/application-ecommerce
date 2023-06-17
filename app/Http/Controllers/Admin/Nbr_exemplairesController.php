<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNbr_exemplaireRequest;
use App\Http\Requests\StoreNbr_exemplaireRequest;
use App\Http\Requests\UpdateNbr_exemplaireRequest;
use App\Models\Nbr_exemplaire;

class Nbr_exemplairesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('nbr_exemplaire_access'), 403);

        $nbr_exemplaires = Nbr_exemplaire::all();

        return view('admin.nbr_exemplaires.index', compact('nbr_exemplaires'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('nbr_exemplaire_create'), 403);

        return view('admin.nbr_exemplaires.create');
    }

    public function store(StoreNbr_exemplaireRequest $request)
    {
        abort_unless(\Gate::allows('nbr_exemplaire_create'), 403);

        $nbr_exemplaire = Nbr_exemplaire::create($request->all());

        return redirect()->route('admin.nbr_exemplaires.index');
    }

    public function edit(Nbr_exemplaire $nbr_exemplaire)
    {
        abort_unless(\Gate::allows('nbr_exemplaire_edit'), 403);

        return view('admin.nbr_exemplaires.edit', compact('nbr_exemplaire'));
    }

    public function update(UpdateNbr_exemplaireRequest $request, Nbr_exemplaire $nbr_exemplaire)
    {
        abort_unless(\Gate::allows('nbr_exemplaire_edit'), 403);

        $nbr_exemplaire->update($request->all());

        return redirect()->route('admin.nbr_exemplaires.index');
    }

    public function show(Nbr_exemplaire $nbr_exemplaire)
    {
        abort_unless(\Gate::allows('nbr_exemplaire_show'), 403);

        return view('admin.nbr_exemplaires.show', compact('nbr_exemplaire'));
    }

    public function destroy(Nbr_exemplaire $nbr_exemplaire)
    {
        abort_unless(\Gate::allows('nbr_exemplaire_delete'), 403);

        $nbr_exemplaire->delete();

        return back();
    }

    public function massDestroy(MassDestroyNbr_exemplaireRequest $request)
    {
        Nbr_exemplaire::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
