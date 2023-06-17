<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommandeRequest;
use App\Http\Requests\StoreCommandeRequest;
use App\Http\Requests\UpdateCommandeRequest;
use App\Models\Commande;
use App\Models\Article;
use App\Models\User;
use App\Models\Format;
use App\Models\Impression;
use App\Models\Papier;
use App\Models\Pelliculage;
use App\Models\Nbr_couleur;
use App\Models\Nbr_exemplaire;


class CommandesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('commande_access'), 403);

        $commandes = Commande::all();

        return view('admin.commandes.index', compact('commandes'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('commande_create'), 403);
        $articles = Article::with([
            'formats',
            'papiers',
            'impressions',
            'pelliculages',
            'nbr_couleurs',
            'nbr_exemplaires'
        ])->get();
        
        $users = User::all();
        
        return view('admin.commandes.create', compact('articles','users'));
    }

    public function store(StoreCommandeRequest $request)
    {
        abort_unless(\Gate::allows('commande_create'), 403);
     
        $commande = Commande::create($request->all());
       
        return redirect()->route('admin.commandes.index');
    }

    public function edit(Commande $commande)
    {
        abort_unless(\Gate::allows('commande_edit'), 403);
        $articles = Article::with([
            'formats',
            'papiers',
            'impressions',
            'pelliculages',
            'nbr_couleurs',
            'nbr_exemplaires'
        ])->get();
        
        $users = User::all();
        return view('admin.commandes.edit', compact('commande', 'articles','users'));
    }

    public function update(UpdateCommandeRequest $request, Commande $commande)
    {
        abort_unless(\Gate::allows('commande_edit'), 403);

        $commande->update($request->all());

        return redirect()->route('admin.commandes.index');
    }

    public function show(Commande $commande)
    {
        abort_unless(\Gate::allows('commande_show'), 403);

        return view('admin.commandes.show', compact('commande'));
    }

    public function destroy(Commande $commande)
    {
        abort_unless(\Gate::allows('commande_delete'), 403);

        $commande->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommandeRequest $request)
    {
        Commande::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
