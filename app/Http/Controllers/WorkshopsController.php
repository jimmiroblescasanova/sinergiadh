<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Event;
use Illuminate\Support\Facades\DB;

class WorkshopsController extends Controller
{

    public function index()
    {
        return view('home.talleres.index', [
            'talleres' => Workshop::inRandomOrder()->paginate()
        ]);
    }

    public function show($id)
    {
//        $eventos = DB::table('events')->where('id_taller', $id);

        return view('home.talleres.show', [
            'el_taller' => Workshop::find($id),
            'talleres' => Workshop::inRandomOrder()->take(4)->get(),
            'eventos' => Event::where('id_taller', $id)->get()
        ]);
    }

}
