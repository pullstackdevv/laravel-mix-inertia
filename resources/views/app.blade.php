<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta Description -->
    <meta name="description" content="Dokumentasi lengkap untuk setup server VPS Ubuntu 22.04 dengan aaPanel, Docker, Laravel, React, Jenkins, Grafana, dan n8n">
    <meta name="keywords" content="VPS, Ubuntu, aaPanel, Laravel, React, Docker, Jenkins, Grafana, n8n, deployment">
    <meta name="author" content="Pullstack">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="VPS Deployment Documentation - Pullstack">
    <meta property="og:description" content="Dokumentasi lengkap untuk setup server VPS Ubuntu 22.04 dengan aaPanel, Docker, Laravel, React, Jenkins, Grafana, dan n8n">
    <meta property="og:image" content="{{ asset('pullstack.svg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Pullstack Documentation">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="VPS Deployment Documentation - Pullstack">
    <meta name="twitter:description" content="Dokumentasi lengkap untuk setup server VPS Ubuntu 22.04 dengan aaPanel, Docker, Laravel, React, Jenkins, Grafana, dan n8n">
    <meta name="twitter:image" content="{{ asset('pullstack.svg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('pullstack.svg') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
