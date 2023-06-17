<?php

namespace App\Http\Requests;

use App\Models\Papier;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyPapierRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('papier_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:papiers,id',
        ];
    }
}
