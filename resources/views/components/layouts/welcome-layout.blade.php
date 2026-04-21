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

        /* Global Loader Styles */
        .global-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
            opacity: 1;
            visibility: visible;
        }

        .global-loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .spinner {
            position: relative;
            width: 80px;
            height: 80px;
        }

        .spinner::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid #ec4899;
            border-right: 3px solid #f43f5e;
            border-radius: 50%;
            animation: spin 1.2s linear infinite;
            box-shadow: 0 0 25px rgba(236, 72, 153, 0.4);
        }

        .spinner::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 60px;
            top: 10px;
            left: 10px;
            border: 3px solid transparent;
            border-bottom: 3px solid #06b6d4;
            border-left: 3px solid #0891b2;
            border-radius: 50%;
            animation: spin-reverse 0.8s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spin-reverse {
            0% {
                transform: rotate(360deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        .loader-text {
            font-size: 16px;
            color: #1e293b;
            font-weight: 600;
            letter-spacing: 0.5px;
            background: linear-gradient(135deg, #3b82f6 0%, #a78bfa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .loader-subtext {
            font-size: 13px;
            color: #94a3b8;
            font-weight: 400;
            letter-spacing: 0.3px;
        }
    </style>
</head>

<body class="min-h-screen bg-white text-slate-900 antialiased">
    <!-- Global Loader -->
    <div class="global-loader" id="globalLoader">
        <div class="loader-content">
            <div class="spinner"></div>
            <p class="loader-text">PixelMoment Studio</p>
            <p class="loader-subtext">Preparing your experience...</p>
        </div>
    </div>

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
        // Hide loader when page is fully loaded
        window.addEventListener('load', function() {
            const loader = document.getElementById('globalLoader');
            if (loader) {
                loader.classList.add('hidden');
            }
        });

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
