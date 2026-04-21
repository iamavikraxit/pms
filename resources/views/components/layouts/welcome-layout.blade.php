<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="PixelMoment Studio — Book professional photographers for weddings, birthdays, corporate events and more. Curated pros, transparent pricing, seamless booking.">

    <title>{{ config('app.name', 'PixelMoment Studio') }} — Book Professional Photographers</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-white text-slate-900 antialiased">
    <div class="flex min-h-screen flex-col">
        <x-site-header />
        <main class="relative flex-1 w-full">
            {{ $slot }}
        </main>
        <x-site-footer />
    </div>

    {{-- Include Login Modal on every page so header login buttons work globally --}}
    @include('pages.login-modal')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Open modal after a short delay only on the first visit
            if (!localStorage.getItem('loginModalShown')) {
                localStorage.setItem('loginModalShown', 'true');
                setTimeout(function() {
                    if (typeof openModal === 'function') {
                        openModal('loginModal');
                    }
                }, 5000); // 5 second delay
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
