<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Aplikasi')</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    @include('layout.header')

    <div class="flex flex-1 pt-16">
        @include('layout.left-side')

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @include('layout.footer')
</body>
</html>
