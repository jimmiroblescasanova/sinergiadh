<?php

namespace App\Http\Controllers;

use App\Instructor;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PanelInstructorsController extends Controller
{

    public function index()
    {
        return view('panel.instructores.index', [
            'instructores' => Instructor::paginate()
        ]);
    }

    public function create()
    {
        return view('panel.instructores.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'img' => 'required'
        ]);

        $file = request()->file('img');

        $fecha = date('ymdhis');
        $nombre = $file->getClientOriginalName();
        $nombre_completo = $fecha.'-'.$nombre;

        Storage::disk('local')->put('public/instructores/' . $nombre_completo, File::get($file));

        Instructor::create([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion'),
            'cita' => request('cita'),
            'img' => $nombre_completo
        ]);

        return redirect()
            ->route('panel.instructors.index')
            ->with('success', 'Creado correctamente');
    }

    public function show(Instructor $id)
    {
        return view('panel.instructores.show', [
            'instructor' => $id
        ]);
    }

    public function edit(Instructor $id)
    {

        return view('panel.instructores.edit', [
            'instructor' => $id
        ]);
    }

    public function update(Instructor $id)
    {
        $fields = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $id->update([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion'),
            'cita' => request('cita')
        ]);

        return redirect()
            ->route('panel.instructors.index')
            ->with('success', 'Actualizado correctamente');
    }

    public function destroy(Instructor $id)
    {
        Storage::delete('public/instructores/' . $id->img);

        $id->delete();

        return redirect()
            ->route('panel.instructors.index')
            ->with('success', 'Eliminado correctamente');
    }
}
