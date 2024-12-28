<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Style Files -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased">
    @if (session('message'))
        <div class="toast-container">
            <div class="toast-message">
                {{ session('message') }}
            </div>
        </div>
    @endif

    {{ $slot }}
</body>

</html>
