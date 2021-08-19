<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
{

    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'label' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'label.required' => 'Debe introducir un texto para la descripción',
        ];
    }
}
