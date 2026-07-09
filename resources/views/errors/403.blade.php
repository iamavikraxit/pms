<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 Forbidden - {{ config('app.name', 'PixelMoment Studio') }}</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind CSS CDN just in case build assets aren't compiled -->
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="h-full bg-slate-950 text-slate-100 flex items-center justify-center overflow-hidden relative">
    <!-- Glowing background blobs -->
    <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-orange-600/20 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-red-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 max-w-xl w-full px-6 text-center">
        <!-- Big 403 Title -->
        <h1 class="text-9xl font-extrabold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-orange-500 to-red-600 mb-4 select-none drop-shadow-[0_5px_15px_rgba(249,115,22,0.3)]">
            403
        </h1>

        <!-- Subtitle -->
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
            Access Forbidden
        </h2>

        <!-- Description -->
        <p class="text-slate-400 text-base md:text-lg mb-10 max-w-md mx-auto leading-relaxed">
            You don't have the permission to access this area.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            @if (auth()->check())
                <a href="{{ route('dashboard') }}" class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-bold rounded-2xl shadow-lg shadow-orange-500/20 hover:shadow-orange-500/35 transition-all duration-300 hover:-translate-y-0.5 text-center">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-bold rounded-2xl shadow-lg shadow-orange-500/20 hover:shadow-orange-500/35 transition-all duration-300 hover:-translate-y-0.5 text-center">
                    Log In
                </a>
            @endif

            <button onclick="window.history.back()" class="w-full sm:w-auto px-8 py-3.5 bg-slate-900 hover:bg-slate-800 text-slate-300 hover:text-white font-semibold rounded-2xl border border-slate-800 hover:border-slate-700 transition-all duration-300 hover:-translate-y-0.5">
                Go Back
            </button>
        </div>
    </div>
</body>

</html>
