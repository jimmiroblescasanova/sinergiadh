<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PanelPhotosController extends Controller
{

    public function index()
    {
        return view('panel.fotos.index', [
            'fotos' => Photo::paginate()
        ]);
    }

    public function create()
    {
        return view('panel.fotos.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'nombre' => 'required',
            'img' => 'required'
        ], [
            'img.required' => 'Debes seleccionar un archivo de imagen.'
        ]);

        $file = request()->file('img');

        $fecha = date('ymdhis');
        $nombre = $file->getClientOriginalName();
        $nombre_completo = $fecha.'-'.$nombre;

        Storage::disk('local')->put('public/galeria/'.$nombre_completo, File::get($file));

        Photo::create([
            'nombre' => request('nombre'),
            'img' => $nombre_completo
        ]);

        return redirect()
            ->route('panel.photos.index')
            ->with('success', 'Creado correctamente');
    }

    public function show(Photo $id)
    {
        return view('panel.fotos.show', [
            'foto' => $id
        ]);
    }

    public function edit(Photo $id)
    {
        return view('panel.fotos.edit', [
            'foto' => $id
        ]);
    }

    public function update(Photo $id)
    {
        $fields = request()->validate([
            'nombre' => 'required'
        ]);

        $id->update([
            'nombre' => request('nombre')
        ]);

        return redirect()
            ->route('panel.photos.index')
            ->with('success', 'Actualizado correctamente');
    }

    public function destroy(Photo $id)
    {

        Storage::delete('public/galeria/' . $id->img);

        $id->delete();

        return redirect()
            ->route('panel.photos.index')
            ->with('success', 'Eliminado correctamente');
    }
}
