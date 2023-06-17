<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::where('statut', '=', 1)->get();

        return view('front.articles-list', compact('articles'));
    }

    public function details($id)
    {
        $article = Article::find($id);

        return view('front.article-detail', compact('article'));
    }

}
