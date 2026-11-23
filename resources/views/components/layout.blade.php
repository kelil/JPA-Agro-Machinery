<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-data="{ lang: localStorage.getItem('jpa_lang') || 'en' }" x-init="$watch('lang', val => localStorage.setItem('jpa_lang', val))">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'JPA Agro-Machinery Import PLC | ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ' }}</title>

    <!-- Fonts: Inter + Noto Sans Ethiopic for sharp Amharic & English rendering -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Ethiopic:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Inter','Noto_Sans_Ethiopic',sans-serif] antialiased bg-white text-slate-900 flex flex-col min-h-screen">

    <x-navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
