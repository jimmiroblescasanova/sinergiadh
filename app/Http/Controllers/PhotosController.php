<?php

namespace App\Http\Controllers;

use App\Photo;

class PhotosController extends Controller
{
    public function index()
    {
        return view('home.galeria.index', [
            'photos' => Photo::get()
        ]);
    }
}
