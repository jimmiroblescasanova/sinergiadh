@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-image"></i> Galeria
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de edición</h6>
        </div>
        <div class="card-body">
            @include('panel.partials.errors')
            <form method="POST" action="{{ route('panel.photos.update', $foto) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Titulo:</label>
                    <input type="text" class="form-control" name="nombre"
                           value="{{ old('nombre', $foto->nombre) }}">
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection