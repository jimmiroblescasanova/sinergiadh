@extends('home.layouts.main')

@section('cuerpo')
    <div class="head-image option-1" style="background-image: url({{ asset('style/images/sinergia/bg-wrkps.png') }});">
        <div class="">
            <div class="container">
                <h1 class="page-title">Conoce los talleres y las fechas disponibles.</h1>
            </div>
        </div>
    </div>

    <div class="light-wrapper">
        <div class="container inner">
            <div class="grid-blog col3">
                @foreach($talleres as $taller)
                    <div class="post">
                        <figure class="icon-overlay icn-link"><a href="{{ route('home.workshops.show', $taller) }}"><img
                                        src="{{ url('/storage/talleres/'.$taller->img) }}" alt=""/></a></figure>
                        <div class="bordered">
                            <h3 class="post-title"><a
                                        href="{{ route('home.workshops.show', $taller) }}">{{ $taller->nombre }}</a></h3>
                            {{--<div class="meta"> <div class="date">18 Jul 2013</div> <span class="comments"><a href="#">3 Comments</a></span> <span class="like"><a href="#">14 <i class="icon-heart"></i></a></span> </div>--}}
                            <p>{!! $taller->dirigido_a !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                {{ $talleres->links() }}
            </div>
            <!-- /.pagination -->

        </div>
        <!-- /.container -->
    </div>
@endsection