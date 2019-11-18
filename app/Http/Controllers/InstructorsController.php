<?php

namespace App\Http\Controllers;

use App\Instructor;

class InstructorsController extends Controller
{

    public function index()
    {
        return view('home.nosotros.index', [
            'instructores' => Instructor::get()
        ]);
    }
}
