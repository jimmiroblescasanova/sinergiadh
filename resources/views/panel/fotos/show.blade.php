@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-user-tie"></i> Galeria
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <th scope="row">Titulo</th>
                        <td>{{ $foto->nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Imagen</th>
                        <td><img src="{{ url('/storage/galeria/'.$foto->img) }}" alt="" width="250px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-2">
                    <a class="btn btn-sm btn-icon-split btn-primary"
                       href="{{ route('panel.photos.edit', $foto) }}">
                        <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                        <span class="text">Editar</span>
                    </a>
                </div>
                <div class="col-sm-2">
                    <form action="{{ route('panel.photos.destroy', $foto) }}" method="POST">
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