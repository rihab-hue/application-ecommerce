<?php

namespace App\Http\Requests;

use App\Models\Format;
use Illuminate\Foundation\Http\FormRequest;

class StoreFormatRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('format_create');
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
