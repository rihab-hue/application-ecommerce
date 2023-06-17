<?php

namespace App\Http\Requests;

use App\Models\Nbr_exemplaire;
use Illuminate\Foundation\Http\FormRequest;

class StoreNbr_exemplaireRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('nbr_exemplaire_create');
    }

    public function rules()
    {
        return [
            'nbr_exp' => [
                'required',
            ],
        ];

    }
}
