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
            border-top: 3px solid #65a30d;
            border-right: 3px solid #4d7c0f;
            border-radius: 50%;
            animation: spin 1.2s linear infinite;
            box-shadow: 0 0 25px rgba(101, 163, 13, 0.4);
        }

        .spinner::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 60px;
            top: 10px;
            left: 10px;
            border: 3px solid transparent;
            border-bottom: 3px solid #84cc16;
            border-left: 3px solid #a3e635;
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
            background: linear-gradient(135deg, #65a30d 0%, #84cc16 100%);
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
            {{-- <p class="loader-text">PixelMoment Studio</p> --}}
        </div>
    </div>

    <div class="flex min-h-screen flex-col">
        <x-layouts.site-header />
        <main class="relative flex-1 w-full">
            {{ $slot }}
        </main>
        <x-layouts.site-footer />
    </div>

    {{-- Include Login Modal on every page so header login buttons work globally --}}
    @include('pages.login-modal')

    <script>
        // Global loader state management
        window.loaderState = {
            imagesLoaded: false,
            pendingRequests: 0,
            isReady: false
        };

        // Function to hide loader
        function hideLoader() {
            const loader = document.getElementById('globalLoader');
            if (loader && !loader.classList.contains('hidden')) {
                loader.classList.add('hidden');
            }
        }

        // Function to check if loader should be hidden
        function checkLoaderReady() {
            if (window.loaderState.imagesLoaded && window.loaderState.pendingRequests === 0 && !window.loaderState.isReady) {
                window.loaderState.isReady = true;
                // Small delay for smooth transition
                setTimeout(hideLoader, 200);
            }
        }

        // Function to check if all images are loaded
        function checkAllImagesLoaded() {
            const images = document.querySelectorAll('img');
            let loadedCount = 0;
            const totalImages = images.length;

            if (totalImages === 0) {
                // No images, mark as loaded
                window.loaderState.imagesLoaded = true;
                checkLoaderReady();
                return;
            }

            images.forEach(img => {
                if (img.complete && img.naturalHeight !== 0) {
                    // Image already loaded
                    loadedCount++;
                } else {
                    // Wait for load or error
                    img.addEventListener('load', () => {
                        loadedCount++;
                        if (loadedCount === totalImages) {
                            window.loaderState.imagesLoaded = true;
                            checkLoaderReady();
                        }
                    });
                    img.addEventListener('error', () => {
                        loadedCount++;
                        if (loadedCount === totalImages) {
                            window.loaderState.imagesLoaded = true;
                            checkLoaderReady();
                        }
                    });
                }
            });

            // If all images were already loaded
            if (loadedCount === totalImages) {
                window.loaderState.imagesLoaded = true;
                checkLoaderReady();
            }
        }

        // Function to register a server request (call this before making API calls)
        window.registerServerRequest = function() {
            window.loaderState.pendingRequests++;
        };

        // Function to mark a server request as complete (call this after receiving response)
        window.completeServerRequest = function() {
            window.loaderState.pendingRequests = Math.max(0, window.loaderState.pendingRequests - 1);
            checkLoaderReady();
        };

        // Function to manually hide loader (for custom scenarios)
        window.hidePageLoader = function() {
            window.loaderState.isReady = true;
            hideLoader();
        };

        // Initialize when page loads
        window.addEventListener('load', function() {
            // Give a small delay to ensure DOM is fully ready
            setTimeout(checkAllImagesLoaded, 100);
        });

        // Fallback: hide loader after 15 seconds maximum
        setTimeout(function() {
            if (!window.loaderState.isReady) {
                window.loaderState.isReady = true;
                hideLoader();
            }
        }, 15000);

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
