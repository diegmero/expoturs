<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ExpoTur 2026') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dspoaxmvn/image/upload/v1762999768/favicon_tkz8q9.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @livewireStyles
</head>
<body class="antialiased">
    @include('components.global-header')
    @yield('content')
    
    <!-- Footer Global -->
    @include('components.footer')
    
    @livewireScripts
</body>
</html>
