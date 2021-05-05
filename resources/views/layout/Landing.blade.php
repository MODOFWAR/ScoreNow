<!DOCTYPE html>
<html lang="en">
<link href="/css/landing.css" rel="stylesheet">
<head>
    <!--memanggil file head dari component -->
    @include('component.Head')
</head>
<body>
    <!-- memanggil file header dari component -->
    @include('component.Header')

    <!--Memanggil isi content dari home-page, bagian section home_container -->
    @yield('home_container')

    <!--memanggil file footer dari component -->
    @include('component.Footer')
</body>
</html>