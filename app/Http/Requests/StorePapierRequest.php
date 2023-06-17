<?php

namespace App\Http\Requests;

use App\Models\Papier;
use Illuminate\Foundation\Http\FormRequest;

class StorePapierRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('papier_create');
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
