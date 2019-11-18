@extends('home.layouts.main')

@section('cuerpo')
    <div class="light-wrapper">
        <div class="container inner bp0">
            <h2 class="slab text-center">Hello, We are <span class="colored">Moose</span>.</h2>
            <p class="lead text-center">a creative media agency that believes in the power of creative ideas and great
                design.</p>
        </div>
        <!-- /.container -->
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
            <ul class="items fullscreen">
                @foreach($photos as $photo)
                    <li class="item thumb graphic"><a data-fancybox href="images/galeria/{{ $photo->ruta }}">
                            <div class="text-overlay">
                                <div class="info">
                                    <h3>{{ $photo->nombre }} <span>Logo, Branding</span></h3>
                                </div>
                            </div>
                            <img src="{{ url('/storage/galeria/'.$photo->img) }}" width="256px" height="190px" alt=""/> </a></li>
                @endforeach
            </ul>
            <!-- /.items -->
        </div>
        <!-- /.portfolio -->

    </div>
    <!-- /.light-wrapper -->
@endsection