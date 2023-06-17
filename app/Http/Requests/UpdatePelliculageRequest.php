<?php

namespace App\Http\Requests;

use App\Models\Pelliculage;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePelliculageRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('pelliculage_edit');
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
