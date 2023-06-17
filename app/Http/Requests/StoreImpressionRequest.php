<?php

namespace App\Http\Requests;

use App\Models\Impression;
use Illuminate\Foundation\Http\FormRequest;

class StoreImpressionRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('impression_create');
    }

    public function rules()
    {
        return [
            'nom' => [
                'required',
            ],
        ];
    }
}
