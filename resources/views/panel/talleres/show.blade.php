@extends('panel.layouts.panel')

@section('titulo')
    <i class="fas fa-tools"></i> Talleres
@endsection

@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mostrar taller</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td>{{ $taller->nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Dirigido a</th>
                        <td>{!! $taller->dirigido_a !!}</td>
                    </tr>
                    <tr>
                        <th scope="row">Descripcion</th>
                        <td>{!! $taller->descripcion !!}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo</th>
                        <td>{{ $taller->tipo }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Imagen miniatura</th>
                        <td><img src="{{ url('/storage/talleres/'.$taller->img) }}" alt="" width="250px"></td>
                    </tr>
                    <tr>
                        <th scope="row">Imagen single</th>
                        <td><img src="{{ url('/storage/talleres/'.$taller->img_single) }}" alt="" width="250px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-2">
                    <a class="btn btn-sm btn-icon-split btn-primary"
                       href="{{ route('panel.workshops.edit', $taller) }}">
                        <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                        <span class="text">Editar</span>
                    </a>
                </div>
                <div class="col-sm-2">
                    <form action="{{ route('panel.workshops.destroy', $taller) }}" method="POST">
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