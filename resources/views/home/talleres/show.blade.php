@extends('home.layouts.workshops-single')

@section('cuerpo')
    <div class="light-wrapper">
        <div class="container inner">
            <div class="row classic-blog single">
                <div class="col-sm-8 content">
                    <div class="posts">
                        <div class="post format-image">
                            <div class="date-wrapper">
                                <a href="blog-post.html" class="date">
                                    <span class="day">{{ $el_taller->created_at->format('d') }}</span>
                                    <span class="month">{{ $el_taller->created_at->format('M')}}</span>
                                </a>
                            </div>
                            <!-- /.date-wrapper -->
                            <div class="format-wrapper"><i class="icon-picture-1"></i></div>
                            <!-- /.format -->

                            <div class="post-content">
                                <h1 class="post-title">{{ $el_taller->nombre }}</h1>
                                <div class="meta">
                                    <span class="category">
                                        <a href="#">#{{ $el_taller->tipo }}</a>
                                    </span>
                                </div>
                                <!-- /.meta -->

                                <figure class="overlay media-wrapper">
                                    <img src="{{ url('/storage/talleres/'.$el_taller->img_single) }}" alt=""
                                         width="100%" height="250px"/>
                                </figure>
                                {!! $el_taller->dirigido_a !!}
                                <br>
                                {!! $el_taller->descripcion !!}
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.post .format-image -->
                    </div>
                    <!-- /.posts -->
                    <div class="posts">
                        <div class="post-content">
                            <h2>Próximos Eventos con Inscripciones Abiertas</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Horario</th>
                                    <th>Opción</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($eventos as $evento)
                                    <tr>
                                        <td>{{ $evento->nombre }}</td>
                                        <td>{{ $evento->fecha->format('j F, Y') }}</td>
                                        <td>{{ $evento->horario }}</td>
                                        <td>
                                            <a href="{{ route('home.registration.show', $evento->id) }}">Inscribirse</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.col-sm-8 .content -->
                <aside class="col-sm-4 sidebar lp30">
                    <div class="sidebox widget">
                        <h3>Mas talleres</h3>
                        <ul class="post-list">
                            @foreach($talleres as $taller)
                                <li>
                                    <div class="icon-overlay icn-link">
                                        <a href="{{ route('home.workshops.show', $taller) }}">
                                            <img src="{{ url('/storage/talleres/'.$taller->img) }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="meta">
                                        <h6>
                                            <a href="{{ url('/storage/talleres/'.$taller->img) }}">{{ $taller->nombre }}</a>
                                        </h6>
                                        <em>{{ $taller->created_at->format('d-m-Y') }}</em>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.post-list -->
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /.col-sm-4 .sidebar -->
            </div>
            <!-- /.row .classic-blog -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->
@endsection