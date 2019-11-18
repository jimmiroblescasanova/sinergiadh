<?php

namespace App\Http\Controllers;

use App\Event;
use App\Workshop;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class PanelEventsController extends Controller
{


    public function index()
    {

        Date::setLocale('es');
        return view('panel.eventos.index', [
            'eventos' => Event::paginate()
        ]);
    }

    public function create()
    {
        return view('panel.eventos.create', [
            'talleres' => Workshop::get()
        ]);
    }

    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'fecha' => 'required',
            'id_taller' => 'required'
        ]);

        Event::create([
            'nombre' => request('nombre'),
            'fecha' => request('fecha'),
            'descripcion' => request('descripcion'),
            'id_taller' => request('id_taller')
        ]);

        return redirect()
            ->route('panel.eventos.index')
            ->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
