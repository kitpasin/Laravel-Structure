<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Structure</title>
    @yield('styles')
    @vite('resources/css/layouts/main.css')
</head>

<body>
    @include('layouts.header')

    <main class="mt-14">
        @yield('pages')
    </main>

    @include('layouts.footer')

    @yield('scripts')
    @vite('resources/js/layouts/main.js')
</body>

</html>
