<?php

namespace App\Http\Requests;

use App\Models\Impression;
use Illuminate\Foundation\Http\FormRequest;

class UpdateImpressionRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('impression_edit');
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
