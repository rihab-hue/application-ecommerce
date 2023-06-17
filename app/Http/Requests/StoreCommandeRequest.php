<?php

namespace App\Http\Requests;

use App\Models\Commande;
use Illuminate\Foundation\Http\FormRequest;

class StoreCommandeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('commande_create');
    }

    public function rules()
    {
        return [
            'article_id' => [
                'required',
            ],
            'user_id' => [
                'required',
            ],
        ];
    }
}
