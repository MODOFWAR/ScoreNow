<!DOCTYPE html>
<html lang="en">
<link href="/css/landing.css" rel="stylesheet">
<head>
    @include('component.Head')
</head>
<body>
    @include('component.Admin-header')
    @yield('crud_hasil_pertandingan_container')
    @include('component.Footer')
</body>
</html>