<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticlesApiController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return $articles;
    }

    public function store(StoreArticleRequest $request)
    {
        return Article::create($request->all());
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        return $article->update($request->all());
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function destroy(Article $article)
    {
        return $article->delete();
    }
}
