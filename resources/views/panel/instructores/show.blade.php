@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Instructores
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td>{{ $instructor->nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Descripcion</th>
                        <td>{!! $instructor->descripcion !!}</td>
                    </tr>
                    <tr>
                        <th scope="row">Cita</th>
                        <td>{!! $instructor->cita !!}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nivel</th>
                        <td>{{ $instructor->nivel }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Imagen</th>
                        <td><img src="{{ url('/storage/instructores/'.$instructor->img) }}" alt="" width="250px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-2">
                    <a class="btn btn-sm btn-icon-split btn-primary"
                       href="{{ route('panel.instructors.edit', $instructor) }}">
                        <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                        <span class="text">Editar</span>
                    </a>
                </div>
                <div class="col-sm-2">
                    <form action="{{ route('panel.instructors.destroy', $instructor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-icon-split btn-danger">
                            <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                            <span class="text">Eliminar</span>
                        </button>
                    </form>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
@endsection