<?php

namespace App\Http\Requests;

use App\Models\Papier;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePapierRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('papier_edit');
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
