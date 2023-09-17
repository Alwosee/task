<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <span class="relative inline-flex"></span>
    <h1 class="text-2xl font-bold mb-5">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div style="color: greenyellow;">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>

</body>

</html>
