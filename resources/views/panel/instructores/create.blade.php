@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Instructores
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de creación</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('panel.instructors.store') }}" method="POST" enctype="multipart/form-data"
                  autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="form-group">
                    <label for="cita">Cita:</label>
                    <textarea name="cita" id="cita" class="form-control summernote">{{ old('cita') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" class="form-control summernote">{{ old('descripcion') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">Seleccionar fotografía</label>
                    <input type="file" id="imagen" class="form-control-file" name="img">
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