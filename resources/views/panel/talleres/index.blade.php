@extends('panel.layouts.panel')

@section('titulo')
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-tools"></i> Talleres
            <a href="{{ route('panel.workshops.create') }}" class="btn btn-primary float-right">Crear Taller</a>
        </div>
    </div>
@endsection

@section('contenido')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Talleres</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirigido a</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($talleres as $taller)
                        <tr>
                            <td>{{ $taller->nombre }}</td>
                            <td>{{ Str::limit($taller->dirigido_a, 50, '...') }}</td>
                            <td>{{ Str::limit($taller->descripcion, 50, '...') }}</td>
                            <td>{{ $taller->tipo }}</td>
                            <td>{{ $taller->img }}</td>
                            <td>
                                <a href="{{ route('panel.workshops.show', $taller) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $talleres->links() }}
            </div>
        </div>
    </div>
@endsection