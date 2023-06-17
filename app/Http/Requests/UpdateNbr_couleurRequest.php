<?php

namespace App\Http\Requests;

use App\Models\Nbr_couleur;
use Illuminate\Foundation\Http\FormRequest;

class UpdateNbr_couleurRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('nbr_couleur_edit');
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
