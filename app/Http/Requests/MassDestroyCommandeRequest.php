<?php

namespace App\Http\Requests;

use App\Models\Commande;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCommandeRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('commande_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:commandes,id',
        ];
    }
}
