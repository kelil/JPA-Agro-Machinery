<!DOCTYPE html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? (app()->getLocale() === 'am' ? 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ' : 'JPA Agro-Machinery Import PLC') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="min-h-screen bg-stone-50 text-stone-900 antialiased">
    {{ $slot }}

    @fluxScripts
</body>
</html>
