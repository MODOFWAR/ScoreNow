<!DOCTYPE html>
<html lang="en">
<link href="/css/landing.css" rel="stylesheet">
<head>
    @include('component.Head')
</head>
<body>
    @include('component.Header')
    @yield('admin_container')
    @include('component.Footer')
</body>
</html>