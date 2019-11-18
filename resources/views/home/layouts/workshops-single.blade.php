<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.modules.headers')
</head>

<body>
@include('home.modules.navbar')

<div class="head-image option-1" style="background-image: url({{ asset('style/images/sinergia/bg-wrkps.png') }});">
    <div class="">
        <div class="container">
            <h1 class="page-title">Información del taller</h1>
        </div>
    </div>
</div>

@yield('cuerpo')

@include('home.modules.newsletter')

@include('home.modules.footer')

@include('home.modules.js')
</body>
</html>