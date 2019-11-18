<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PanelWorkshopsController extends Controller
{
    public function index()
    {
        return view('panel.talleres.index', [
            'talleres' => workshop::paginate()
        ]);
    }

    public function create()
    {
        return view('panel.talleres.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'nombre' => 'required',
            'dirigido_a' => 'required',
            'descripcion' => 'required',
            'img' => 'required',
            'img_single' => 'required'
        ], [
            'img.required' => 'Debes seleccionar un archivo de imagen.',
            'img_single.required' => 'Debes seleccionar un archivo de imagen.'
        ]);

        $file_thumb = request()->file('img');
        $file_single = request()->file('img_single');

        $fecha = date('ymdhis');
        $nombre_1 = $file_thumb->getClientOriginalName();
        $nombre_2 = $file_single->getClientOriginalName();
        $nombre_thumb = $fecha.'-'.$nombre_1;
        $nombre_single = $fecha.'-'.$nombre_2;

        Storage::disk('local')->put('public/talleres/'.$nombre_thumb, File::get($file_thumb));
        Storage::disk('local')->put('public/talleres/'.$nombre_single, File::get($file_single));

        Workshop::create([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion'),
            'dirigido_a' => request('dirigido_a'),
            'tipo' => request('tipo'),
            'img' => $nombre_thumb,
            'img_single' => $nombre_single
        ]);

        return redirect()
            ->route('panel.workshops.index')
            ->with('success', 'Creado correctamente');
    }

    public function show(Workshop $id)
    {
        return view('panel.talleres.show', [
            'taller' => $id
        ]);
    }

    public function edit(Workshop $id)
    {
        return view('panel.talleres.edit', [
            'taller' => $id
        ]);
    }

    public function update(Workshop $id)
    {
        $fields = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'dirigido_a' => 'required',
            'tipo' => 'required'
        ]);

        $id->update([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion'),
            'dirigido_a' => request('dirigido_a'),
            'tipo' => request('tipo')
        ]);

        return redirect()
            ->route('panel.workshops.index')
            ->with('success', 'Actualizado correctamente');
    }

    public function destroy(Workshop $id)
    {
        Storage::delete('public/talleres/' . $id->img);
        Storage::delete('public/talleres/' . $id->img_single);

        $id->delete();

        return redirect()
            ->route('panel.workshops.index')
            ->with('success', 'Eliminado correctamente');
    }
}
