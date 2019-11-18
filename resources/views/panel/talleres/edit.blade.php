@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Talleres
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Actualización de taller</h6>
        </div>
        <div class="card-body">
            @include('panel.partials.errors')
            <form action="{{ route('panel.workshops.update', $taller) }}" method="POST" autocomplete="off">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $taller->nombre) }}">
                </div>
                <div class="form-group">
                    <label for="dirigido_a">Dirigido a:</label>
                    <textarea name="dirigido_a" id="dirigido_a"
                              class="form-control summernote">{{ old('dirigido_a', $taller->dirigido_a) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" class="form-control summernote">{{ old('descripcion', $taller->descripcion) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" value="{{ old('tipo', $taller->tipo) }}">
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