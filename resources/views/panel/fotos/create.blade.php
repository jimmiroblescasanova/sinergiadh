@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Galeria
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de creación</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('panel.photos.store') }}" method="POST" enctype="multipart/form-data"
                  autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="">Titulo:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="form-group">
                    <label for="imagen">Seleccionar fotografía:</label>
                    <input type="file" id="imagen" class="form-control-file" name="img">
                </div>
                <button class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection