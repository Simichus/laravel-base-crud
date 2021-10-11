<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    {{-- CDNS HERE --}}
    @yield('cdns')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    @include('includes.header')
    <main class="container py-5">
        <section id="@yield('section-id')">
            @yield('content')
        </section>
    </main>
</body>
</html>