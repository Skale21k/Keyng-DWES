<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}"></link>
</head>
<body>
    <!-- header -->
    @include('layouts._partials.menu')

    @yield('content')

    <!-- footer -->
</body>
</html>
