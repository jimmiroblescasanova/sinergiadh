@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Instructores
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de edición</h6>
        </div>
        <div class="card-body">
            @include('panel.partials.errors')
            <form method="POST" action="{{ route('panel.instructors.update', $instructor) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre"
                           value="{{ old('nombre', $instructor->nombre) }}">
                </div>
                <div class="form-group">
                    <label for="cita">Cita:</label>
                    <textarea name="cita" id="cita"
                              class="form-control summernote">{{ old('cita', $instructor->cita) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion"
                              class="form-control summernote">{{ old('descripcion', $instructor->descripcion) }}</textarea>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 250,
                minHeight: null,
                maxHeight: null,
                focus: true
            });
        });
    </script>
@endsection