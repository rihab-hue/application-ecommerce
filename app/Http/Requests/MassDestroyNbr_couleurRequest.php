<?php

namespace App\Http\Requests;

use App\Models\Nbr_couleur;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyNbr_couleurRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('nbr_couleur_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:nbr_couleurs,id',
        ];
    }
}
