<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.modules.headers')
</head>

<body>
@include('home.modules.navbar')

@yield('cuerpo')

@include('home.modules.footer')

@include('home.modules.js')
</body>
</html>