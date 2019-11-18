@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-calendar-check"></i> Eventos
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de creación</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('panel.events.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="">Nombre (identificador):</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="form-group">
                    <label for="">Fecha del evento:</label>
                    <input type="date" class="form-control" name="fecha" value="{{ old('fecha') }}">
                </div>
                <div class="form-group">
                    <label for="">Selecciona el taller:</label>
                    <select class="form-control" name="id_taller" id="taller">
                        @foreach($talleres as $taller)
                            <option value="{{ $taller->id }}">{{ Str::limit($taller->nombre, 50, '...') }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción del evento:</label>
                    <textarea name="descripcion" class="form-control summernote">{{ old('descripcion') }}</textarea>
                </div>
                <button class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 200,
                maxHeight: 400
            });
        });
    </script>
@endsection