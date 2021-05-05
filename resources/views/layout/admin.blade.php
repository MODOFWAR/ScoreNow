<!DOCTYPE html>
<html lang="en">
<link href="/css/landing.css" rel="stylesheet">
<head>
    <!-- memanggil file head dari component -->
    @include('component.Head')
</head>
<body>
    <!-- memanggil file header dari component -->
    @include('component.Admin-header')

     <!--Memanggil isi content dari admin.php, bagian section admin_container -->
    @yield('admin_container')

    <!-- memanggil file footer dari component -->
    @include('component.Footer')
</body>
</html>