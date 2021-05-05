<!DOCTYPE html>
<html lang="en">
<link href="/css/topscore.css" rel="stylesheet">

<head>
    <!-- memanggil file head dari component -->
    @include('component.Head')
</head>
<body>
    <!-- memanggil file header dari component -->
    @include('component.Header')

    <!--Memanggil isi content dari topscore, bagian section topscore_container -->
    @yield('topscore_container')

    <!-- memanggil file footer dari component -->
    @include('component.Footer')
</body>
</html>