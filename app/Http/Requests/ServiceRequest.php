<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'label' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El nombre es obligatorio',
            'label.required' => 'La descripción es obligatoria',
        ];
    }
}
