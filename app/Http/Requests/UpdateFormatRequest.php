<?php

namespace App\Http\Requests;

use App\Models\Format;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFormatRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('format_edit');
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
