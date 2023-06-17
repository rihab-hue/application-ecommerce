<?php

namespace App\Http\Requests;

use App\Models\Pelliculage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyPelliculageRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('pelliculage_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pelliculages,id',
        ];
    }
}
