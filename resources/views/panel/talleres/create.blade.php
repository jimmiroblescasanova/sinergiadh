@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Talleres
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de creación</h6>
        </div>
        <div class="card-body">
            @include('panel.partials.errors')
            <form action="{{ route('panel.workshops.store') }}" method="POST" enctype="multipart/form-data"
                  autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="form-group">
                    <label for="dirigido_a">Dirigido a:</label>
                    <textarea name="dirigido_a" id="dirigido_a"
                              class="form-control summernote">{{ old('dirigido_a') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" class="form-control summernote">{{ old('descripcion') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" value="{{ old('tipo') }}">
                </div>
                <div class="form-group">
                    <label for="imagen">Seleccionar fotografía principal. <small><a href="#" data-toggle="tooltip" title="Dimesiones: 440 x 330px">Ayuda</a></small></label>
                    <input type="file" id="imagen" class="form-control-file" name="img">
                </div>
                <div class="form-group">
                    <label for="single">Seleccionar fotografía del
                        contenido. <small><a href="#" data-toggle="tooltip" title="Alto de imagen recomendado: 400px">Ayuda</a></small></label>
                    <input type="file" id="single" class="form-control-file" name="img_single">
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
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection