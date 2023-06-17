<?php

namespace App\Http\Requests;

use App\Models\Nbr_couleur;
use Illuminate\Foundation\Http\FormRequest;

class StoreNbr_couleurRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('nbr_couleur_create');
    }

    public function rules()
    {
        return [
            'nbr_coul' => [
                'required',
            ],
        ];

    }
}
