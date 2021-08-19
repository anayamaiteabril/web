<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    protected $redirect = "/#contactForm";

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es necesario.',
            'email.required' => 'El campo Email es necesario.',
            'email.email' => 'El Email debe tener un formato correcto.',
            'comments.required' => 'El campo del mensaje es necesario,',
        ];
    }
}
