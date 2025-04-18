<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 h-screen overflow-hidden">
    @include('layout.header')

    <div class="flex h-full pt-16">
        @include('layout.left-side')

        <main class="">
            @yield('content')
        </main>
    </div>

    @include('layout.footer')
</body>
</html>