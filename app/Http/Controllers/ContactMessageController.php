<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{

    public function index()
    {
        return view('home.contacto');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        Mail::to('info@sinergiadh.com')
            ->bcc('habannaslim@gmail.com')
            ->queue(New Contact($request->all()));

        alert()->success('El mensaje fue enviado correctamente. Te responderemos en menos de 24 hrs.')
            ->persistent('Entendido');

        return redirect()->back();
    }
}
