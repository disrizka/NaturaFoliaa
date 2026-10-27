<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Natura Folia Export') | Indonesian Charcoal Briquette Exporter</title>
    <meta name="description" content="@yield('description', 'Natura Folia Export supplies shisha-grade and BBQ charcoal briquettes from selected Indonesian manufacturers to international buyers.')">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/tab-32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/tab-192.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/tab-apple.png') }}">
    <meta name="theme-color" content="#0f3d2e">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>