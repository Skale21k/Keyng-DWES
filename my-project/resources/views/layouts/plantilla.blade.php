<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._partials.imports')
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts._partials.header')
    <main>
        @if (\Session::get("success"))
        <div class="alert alert-success  ">
            <p>{{\Session::get("success")}}</p>
        </div>
    @endif
        @yield('content')
    </main>
    <p id="easter-egg"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">.</a></p>
</body>
</html>
