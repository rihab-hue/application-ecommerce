<?php

namespace App\Http\Requests;

use App\Models\Impression;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyImpressionRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('impression_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:impressions,id',
        ];
    }
}
