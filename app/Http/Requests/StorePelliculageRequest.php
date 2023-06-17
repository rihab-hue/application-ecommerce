<?php

namespace App\Http\Requests;

use App\Models\Pelliculage;
use Illuminate\Foundation\Http\FormRequest;

class StorePelliculageRequest extends FormRequest
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
