@extends ('home.layouts.main')

@section('cuerpo')
    {{--<div class="head-image option-3" style="background-image: url(style/images/art/ptbg1.jpg);">
        <div class="overlay light">
            <div class="container">
                <h1 class="page-title">About Our Company</h1>
            </div>
        </div>
    </div>--}}

    <div id="first" class="parallax">
        <div class="inner">
            <h3 class="text-center section-title">¿Quienes somos? <span>Biografía de la compañia</span></h3>
            <p class="lead">Somos una empresa 100% mexicana, comprometidos por un M&eacute;xico competitivo. Estamos
                claros que para llegar a un objetivo requerimos hacer Sinergia con el otro. ¿Te unes con nosotros?</p>
        </div>
    </div>

    <div class="light-wrapper">
        <div class="container inner">
            <h2 class="slab text-center">El equipo de <span class="colored">Sinergia Desarrollo Humano</span>.</h2>
            <p class="lead text-center">un equipo creativo que cree en el poder de las ideas.</p>
            <div class="divide30"></div>
            <div class="portfolio">
            {{--<ul class="filter text-center">
                <li><a class="active" href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".graphic">Graphic</a></li>
                <li><a href="#" data-filter=".mockup">Mockup</a></li>
                <li><a href="#" data-filter=".video">Video</a></li>
                <li><a href="#" data-filter=".music">Music</a></li>
            </ul>--}}
            <!-- /.filter -->

                <ul class="items col3">
                    @foreach($instructores as $instructor)
                        <li class="item thumb"><a href="#">
                                <div class="text-overlay">
                                    <div class="info">
                                        <h3>{{ $instructor->nombre }}
                                            <span>{!! Str::limit($instructor->descripcion, 100, '...') !!}</span></h3>
                                    </div>
                                </div>
                                <img src="{{ url('/storage/instructores/'.$instructor->img) }}" height="300px"
                                     alt=""></a></li>
                    @endforeach
                </ul>
                <!-- /.items -->
            </div>
            <!-- /.portfolio -->
        </div>
        <!-- /.container -->
    </div>
    <div class="dark-wrapper">
        <div class="container inner">
            <div id="testimonials" class="tab-container">
                <div class="panel-container">
                    <div id="tst1"> El mundo requiere de locos comprometidos con la evolución Humana que estén
                        dispuestos a dejar un legado de paz y diversión en acciones, no en bonitas ideas. <span
                                class="author">Miguel Matienzo</span></div>
                    <div id="tst2"> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus
                        mollis interdum. Etiam porta sem malesuada magna mollis euismod. <span class="author">Coriss Ambady</span>
                    </div>
                    <div id="tst3"> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec
                        sed odio dui. Aenean lacinia bibendum nulla sed consectetur. <span class="author">Barclay Widerski</span>
                    </div>
                    <div id="tst4"> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus
                        vel augue laoreet rutrum faucibus dolor auctor gravida at eget metus. <span class="author">Elsie Spear</span>
                    </div>
                </div>
                <ul class="etabs">
                    <li class="tab"><a href="#tst1">1</a></li>
                    <li class="tab"><a href="#tst2">2</a></li>
                    <li class="tab"><a href="#tst3">3</a></li>
                    <li class="tab"><a href="#tst4">4</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
