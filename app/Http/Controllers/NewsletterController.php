<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function store(Request $request)
    {

        Mail::to('info@sinergiadh.com')
            ->bcc('habannaslim@gmail.com')
            ->queue(new Newsletter($request->all()));

        alert()->success('Gracias por dejarnos tu correo, muy pronto comenzaras a recibir noticias.')
            ->persistent('Cerrar');

        return back();


    }
}
