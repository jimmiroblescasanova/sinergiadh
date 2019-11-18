@extends ('home.layouts.main')

@section ('cuerpo')
    <div class="fullwidthbanner-container revolution">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="fade"><img src="images/home/slider_01.jpg" alt=""/>
                    <div class="caption bold white-bg sfr" data-x="center" data-y="215" data-speed="500"
                         data-start="1000" data-easing="Sine.easeOut">Los mejores talleres.
                    </div>
                    <div class="caption lite white-bg sfr" data-x="center" data-y="280" data-speed="500"
                         data-start="1800" data-easing="Sine.easeOut">Deja tu huella en el mundo.
                    </div>
                    <div class="caption sfr" data-x="center" data-y="340" data-speed="500" data-start="2000"
                         data-easing="Sine.easeOut"><a href="{{ route('home.workshops.index') }}" class="btn btn-large">Ver
                            talleres</a></div>
                </li>
                <li data-transition="fade"><img src="images/home/slider_02.jpg" alt=""/>
                    <div class="caption sfl bold opacity-bg" data-x="35" data-y="180" data-speed="500" data-start="1500"
                         data-easing="Sine.easeOut">Instructores
                    </div>
                    <div class="caption sfr bold opacity-bg" data-x="35" data-y="245" data-speed="500" data-start="2000"
                         data-easing="Sine.easeOut">100% calificados
                    </div>
                    <div class="caption sfb" data-x="35" data-y="310" data-speed="500" data-start="2500"
                         data-easing="Sine.easeOut"><a href="{{ route('home.us.index') }}"
                                                       class="btn btn-green btn-large">Conócelos</a>
                    </div>
                </li>
                <li data-transition="fade"><img src="images/home/slider_03.jpg" alt=""/>
                    <div class="caption sft bold white-bg" data-x="center" data-y="215" data-speed="500"
                         data-start="500" data-easing="Sine.easeOut">Para todo público
                    </div>
                    <div class="caption sfb lite white-bg" data-x="center" data-y="281" data-speed="500"
                         data-start="1000" data-easing="Sine.easeOut">Cualquier persona que quiera mejorar sus habilidades, puede hacerlo
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.fullwidthbanner -->
    </div>
    <!-- /.fullwidthbanner-container -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="tabs services tab-container">
                <div class="panel-container">
                    <div class="tab-block" id="tab-1">
                        <h2 class="slab">Talleres de <span class="colored">Inteligencia</span></h2>
                        <p class="lead">Capital Humano que desempeñe funciones Gerenciales, Supervisión, Recursos
                            Humanos, Directores, Encargados de Turno, Encargados de Área, Coordinadores.</p>
                    </div>
                    <!-- /.tab-block -->
                    <div class="tab-block" id="tab-2">
                        <h2 class="slab">Taller de <span class="colored">Manejo Defensivo</span></h2>
                        <p class="lead">Capital Humano que desempeñe funciones de Conducción de vehículos.</p>
                    </div>
                    <!-- /.tab-block -->
                    <div class="tab-block" id="tab-3">
                        <h2 class="slab">Imparticion de cursos de <span class="colored">Capital Humano</span></h2>
                        <p class="lead"> Público en General, con interés de desempeñar funciones que requieran estar
                            frente a un grupo de personas y el diseño de cursos de formación de Capital humano.</p>
                    </div>
                    <!-- /.tab-block -->
                    <div class="tab-block" id="tab-4">
                        <h2 class="slab">Alineación para <span class="colored">EC0076</span></h2>
                        <p class="lead">Capital humano que sus funciones sean evaluar los conocimientos, desempeños,
                            actitudes, hábitos y valores en cualquier estándar de competencia.</p>
                    </div>
                    <!-- /.tab-block -->
                </div>
                <!-- /.panel-container -->
                <ul class="etabs row-fluid">
                    <li class="tab col-sm-3"><a href="#tab-1">
                            <div class="icon"><i class="icon-lamp icn"></i></div>
                            <h4>Inteligencia Emocional</h4>
                        </a></li>
                    <li class="tab col-sm-3"><a href="#tab-2">
                            <div class="icon"><i class="icon-gauge-1 icn"></i></div>
                            <h4>Soluciones Rapidas</h4>
                        </a></li>
                    <li class="tab col-sm-3"><a href="#tab-3">
                            <div class="icon"><i class="icon-users-1 icn"></i></div>
                            <h4>Capital Humano</h4>
                        </a></li>
                    <li class="tab col-sm-3"><a href="#tab-4">
                            <div class="icon"><i class="icon-award icn"></i></div>
                            <h4>Certificaciones</h4>
                        </a></li>
                </ul>
                <!-- /.etabs -->
            </div>
            <!-- /.tabs -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

    <div class="black-wrapper">
        <div class="container inner text-center">
            <div class="thin">
                <h3 class="section-title bm20">Video Tutorial <span>¿Qué es Sinergia?</span></h3>
                <p>Donec ullamcorper metus auctor fringi. Nullam quis risus eget. Vestibulum id ligula porta euismod
                    semper. Maecenas faucibus mollis. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium.</p>
                <div class="divide20"></div>
                <figure class="player">
                    <iframe src="http://player.vimeo.com/video/24496773?title=0&amp;byline=0&amp;portrait=0&amp;badge=0"
                            width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen
                            allowFullScreen></iframe>
                </figure>
            </div>
        </div>
    </div>

    @include('home.modules.newsletter')

    <div class="dark-wrapper">
        <div class="container inner">
            <h3 class="text-center section-title">Algunos de nuestros clientes
                <span>Empresas con las que trabajamos</span></h3>
            <div id="owl-clients">
                <div class="item"><img src="images/home/cliente_01.png" alt=""></div>
                <div class="item"><img src="style/images/art/c2.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c3.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c4.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c5.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c6.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c7.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c8.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c9.jpg" alt=""></div>
                <div class="item"><img src="style/images/art/c10.jpg" alt=""></div>
            </div>
        </div>
    </div>
@endsection