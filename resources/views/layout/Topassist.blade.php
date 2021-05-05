<!DOCTYPE html>
<html lang="en">
<link href="/css/topassist.css" rel="stylesheet">
<head>
    <!-- memanggil file head dari component -->
    @include('component.Head')
</head>
<body>
    <!-- memanggil file header dari component -->
    @include('component.Header')

     <!--Memanggil isi content dari topassist, bagian section topassist_container -->
    @yield('container_topassist')

    <!-- memanggil file head dari component -->
    @include('component.Footer')
</body>
</html>