<?php

namespace App\Http\Requests;

use App\Models\Commande;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCommandeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('commande_edit');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
            ],
            'article_id' => [
                'required',
            ],
        ];
    }

}
