@extends('home.layouts.main')

@section('cuerpo')
    <div class="head-image option-1" style="background-image: url({{ asset('style/images/sinergia/bg-wrkps.png') }});">
        <div class="">
            <div class="container">
                <h1 class="page-title">Envío de datos para el registro</h1>
            </div>
        </div>
    </div>
    <div class="blog no-sidebar">
        <div class="light-wrapper">
            <div class="container inner">
                <div class="post format-image">
                    <h2 class="post-title">Completa el Formulario de Registro</h2>

                    <form action="{{ route('home.registration.store') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre(s):</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos">
                        </div>
                        <div class="form-group">
                            <label for="">¿Como te gusta que te llamen?:</label>
                            <input type="text" class="form-control" name="nombre_favorito">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono:</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>
                        <button class="btn btn-primary">REGISTRARME</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.post .format-image -->
@endsection