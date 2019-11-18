@extends('panel.layouts.panel')

@section('titulo')
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-user-tie"></i> Instructores
            <a class="btn btn-primary float-right" href="{{ route('panel.instructors.create') }}">Crear Nuevo</a>
        </div>
    </div>
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Instructores</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Cita</th>
                        <th>Nivel</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($instructores as $instructor)
                        <tr>
                            <td>{{ $instructor->nombre }}</td>
                            <td>{{ Str::limit($instructor->descripcion, 50, '...') }}</td>
                            <td>{{ Str::limit($instructor->cita, 50, '...') }}</td>
                            <td>{{ $instructor->nivel }}</td>
                            <td>{{ $instructor->img }}</td>
                            <td>
                                <a href="{{ route('panel.instructors.show', $instructor) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection