@extends('panel.layouts.panel')

@section('titulo')
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-user-tie"></i> Galeria
            <a class="btn btn-primary float-right" href="{{ route('panel.photos.create') }}">Crear Nuevo</a>
        </div>
    </div>
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tabla de fotos galería</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fotos as $foto)
                        <tr>
                            <td>{{ $foto->nombre }}</td>
                            <td>{{ $foto->img }}</td>
                            <td>
                                <a href="{{ route('panel.photos.show', $foto) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $fotos->links() }}
            </div>
        </div>
    </div>
@endsection