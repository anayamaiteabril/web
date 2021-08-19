<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        return view('front.static.contacto');
    }

    public function send(ContactRequest $request)
    {
        $datos = $request->only(['name', 'email', 'subject', 'comments']);
        $email = new \App\Mail\ContactEmail($datos);
        $email->replyTo($datos['email']);
        \Mail::to(env('CONTACT_EMAIL'))->queue($email);
        session()->flash('success', true);
        return redirect('/#contactForm');
    }
}
