<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyArticleRequest;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Format;
use App\Models\Impression;
use App\Models\Papier;
use App\Models\Pelliculage;
use App\Models\Nbr_couleur;
use App\Models\Nbr_exemplaire;

class ArticlesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('article_access'), 403);

        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('article_create'), 403);

        $formats = Format::all();
        $papiers = Papier::all();
        $impressions = Impression::all();
        $pelliculages = Pelliculage::all();
        $nbr_couleurs = nbr_couleur::all();
        $nbr_exemplaires = Nbr_exemplaire::all();

        return view('admin.articles.create', compact('formats','papiers','impressions','pelliculages','nbr_couleurs','nbr_exemplaires'));
    }

    public function store(StoreArticleRequest $request)
    {
        abort_unless(\Gate::allows('article_create'), 403);
        $request->merge(['statut' => (isset($request->statut) ? 1 : 0)]);
        $article = Article::create($request->all());
        
        if(!empty($request->select_format)){
            $data = [];
            foreach ($request->select_format as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_format[$key]) ? $request->prix_format[$key] : NULL),
                    'nomber' => (isset($request->nomber_format[$key]) ? $request->nomber_format[$key] : NULL),
                ];
            }
  
            $article->formats()->attach($data);
        }

        if(!empty($request->select_papier)){
            $data = [];
            foreach ($request->select_papier as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_papier[$key]) ? $request->prix_papier[$key] : NULL),
                    'nomber' => (isset($request->nomber_papier[$key]) ? $request->nomber_papier[$key] : NULL),
                ];
            }

            $article->papiers()->attach($data);
        }
        if(!empty($request->select_impression)){
            $data = [];
            foreach ($request->select_impression as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_impression[$key]) ? $request->prix_impression[$key] : NULL),
                    'nomber' => (isset($request->nomber_impression[$key]) ? $request->nomber_impression[$key] : NULL),
                ];
            }
            $article->impressions()->attach($data);
        }
         
        if(!empty($request->select_pelliculage)){
            $data = [];
            foreach ($request->select_pelliculage as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_pelliculage[$key]) ? $request->prix_pelliculage[$key] : NULL),
                    'nomber' => (isset($request->nomber_pelliculage[$key]) ? $request->nomber_pelliculage[$key] : NULL),
                ];
            }
            $article->pelliculages()->attach($data);
        }
        if(!empty($request->select_nbr_couleur)){
            $data = [];
            foreach ($request->select_nbr_couleur as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_nbr_couleur[$key]) ? $request->prix_nbr_couleur[$key] : NULL),
                    'nomber' => (isset($request->nomber_nbr_couleur[$key]) ? $request->nomber_nbr_couleur[$key] : NULL),
                ];
                }
            $article->nbr_couleurs()->attach($data);
        }
        
        if(!empty($request->select_nbr_exemplaire)){
            $data = [];
            foreach ($request->select_nbr_exemplaire as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_nbr_exemplaire[$key]) ? $request->prix_nbr_exemplaire[$key] : NULL),
                    'nomber' => (isset($request->nomber_nbr_exemplaire[$key]) ? $request->nomber_nbr_exemplaire[$key] : NULL),
                ];
            }
            $article->nbr_exemplaires()->attach($data);
        }

        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        abort_unless(\Gate::allows('article_edit'), 403);

        $formats = Format::all();
        $papiers = Papier::all();
        $impressions = Impression::all();
        $pelliculages = Pelliculage::all();
        $nbr_couleurs = nbr_couleur::all();
        $nbr_exemplaires = Nbr_exemplaire::all();

        return view('admin.articles.edit', compact('article', 'formats', 'papiers', 'impressions', 'pelliculages', 'nbr_couleurs', 'nbr_exemplaires'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        abort_unless(\Gate::allows('article_edit'), 403);
        $request->merge(['statut' => (isset($request->statut) ? 1 : 0)]);
        $article->update($request->all());
        if(!is_null($request->select_format[0])){
            $data = [];
            foreach ($request->select_format as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_format[$key]) ? $request->prix_format[$key] : NULL),
                    'nomber' => (isset($request->nomber_format[$key]) ? $request->nomber_format[$key] : NULL),
                ];
            
            $article->formats()->sync($data);
        }}
        else {
            $article->formats()->sync([]);
        }
        if(!is_null($request->select_papier[0])){
            $data = [];
            foreach ($request->select_papier as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_papier[$key]) ? $request->prix_papier[$key] : NULL),
                    'nomber' => (isset($request->nomber_papier[$key]) ? $request->nomber_papier[$key] : NULL),
                ];
            }
            $article->papiers()->sync($data);
        } 
        else {
            $article->papiers()->sync([]);
        }
        
        //dd($request->all());
       if(!is_null($request->select_impression[0])){ 
            $data = [];
            foreach ($request->select_impression as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_impression[$key]) ? $request->prix_impression[$key] : NULL),
                    'nomber' => (isset($request->nomber_impression[$key]) ? $request->nomber_impression[$key] : NULL),
                ];
            }
            $article->impressions()->sync($data);
        }
        else {
            $article->impressions()->sync([]);
        }
        if(!is_null($request->select_pelliculage[0])){
            $data = [];
            foreach ($request->select_pelliculage as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_pelliculage[$key]) ? $request->prix_pelliculage[$key] : NULL),
                    'nomber' => (isset($request->nomber_pelliculage[$key]) ? $request->nomber_pelliculage[$key] : NULL),
                ];
            }
            $article->pelliculages()->sync($data);
        }
        else {
            $article->pelliculages()->sync([]);
        }
        if(!is_null($request->select_nbr_couleur[0])){
            $data = [];
            foreach ($request->select_nbr_couleur as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_nbr_couleur[$key]) ? $request->prix_nbr_couleur[$key] : NULL),
                    'nomber' => (isset($request->nomber_nbr_couleur[$key]) ? $request->nomber_nbr_couleur[$key] : NULL),
                ];
            }
            $article->nbr_couleurs()->sync($data);
        }
        else {
            $article->nbr_couleurs()->sync([]);
        }
        if(!is_null($request->select_nbr_exemplaire[0])){
            $data = [];
            foreach ($request->select_nbr_exemplaire as $key => $value) {
                $data[$value] =  [
                    'prix' => (isset($request->prix_nbr_exemplaire[$key]) ? $request->prix_nbr_exemplaire[$key] : NULL),
                    'nomber' => (isset($request->nomber_nbr_exemplaire[$key]) ? $request->nomber_nbr_exemplaire[$key] : NULL),
                ];
            }
            $article->nbr_exemplaires()->sync($data);
        }else {
            $article->nbr_exemplaires()->sync([]);
        }

        return redirect()->route('admin.articles.index');
    }

    public function show(Article $article)
    {
        abort_unless(\Gate::allows('article_show'), 403);

        return view('admin.articles.show', compact('article'));
    }

    public function destroy(Article $article)
    {
        abort_unless(\Gate::allows('article_delete'), 403);

        $article->delete();

        return back();
    }

    public function massDestroy(MassDestroyArticleRequest $request)
    {
        Article::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
