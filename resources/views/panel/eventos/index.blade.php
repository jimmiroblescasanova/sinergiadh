@extends('panel.layouts.panel')

@section('titulo')
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-calendar-check"></i> Eventos
            <a class="btn btn-primary float-right" href="{{ route('panel.events.create') }}">Crear Nuevo</a>
        </div>
    </div>
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de eventos del calendario</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha del evento</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($eventos as $evento)
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha->format('j F, Y') }}</td>
                        <td>{{ $evento->descripcion }}</td>
                        <td>&nbsp;</td>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $eventos->links() }}
            </div>
        </div>
    </div>
@endsection