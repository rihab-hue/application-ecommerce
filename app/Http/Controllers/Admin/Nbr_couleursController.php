<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNbr_couleurRequest;
use App\Http\Requests\StoreNbr_couleurRequest;
use App\Http\Requests\UpdateNbr_couleurRequest;
use App\Models\Nbr_couleur;

class Nbr_couleursController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('nbr_couleur_access'), 403);

        $nbr_couleurs = Nbr_couleur::all();

        return view('admin.nbr_couleurs.index', compact('nbr_couleurs'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('nbr_couleur_create'), 403);

        return view('admin.nbr_couleurs.create');
    }

    public function store(StoreNbr_couleurRequest $request)
    {
        abort_unless(\Gate::allows('nbr_couleur_create'), 403);

        $nbr_couleur = Nbr_couleur::create($request->all());

        return redirect()->route('admin.nbr_couleurs.index');
    }

    public function edit(Nbr_couleur $nbr_couleur)
    {
        abort_unless(\Gate::allows('nbr_couleur_edit'), 403);

        return view('admin.nbr_couleurs.edit', compact('nbr_couleur'));
    }

    public function update(UpdateNbr_couleurRequest $request, Nbr_couleur $nbr_couleur)
    {
        abort_unless(\Gate::allows('nbr_couleur_edit'), 403);

        $nbr_couleur->update($request->all());

        return redirect()->route('admin.nbr_couleurs.index');
    }

    public function show(Nbr_couleur $nbr_couleur)
    {
        abort_unless(\Gate::allows('nbr_couleur_show'), 403);

        return view('admin.nbr_couleurs.show', compact('nbr_couleur'));
    }

    public function destroy(Nbr_couleur $nbr_couleur)
    {
        abort_unless(\Gate::allows('nbr_couleur_delete'), 403);

        $nbr_couleur->delete();

        return back();
    }

    public function massDestroy(MassDestroyNbr_couleurRequest $request)
    {
        Nbr_couleur::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
