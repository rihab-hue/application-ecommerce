<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('article_create');
    }

    public function rules()
    {
        return [
            'titre' => [
                'required',
            ],
            'prix' => [
                'required',
            ],
        ];

    }
}
