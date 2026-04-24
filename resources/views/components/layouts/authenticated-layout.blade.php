<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard' }} — PixelMoment Studio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-studio-silk {
            background-color: #fafafa;
            background-image:
                radial-gradient(at 0% 0%, rgba(163, 230, 53, 0.03) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(163, 230, 53, 0.03) 0px, transparent 50%);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e4e4e7;
            border-radius: 20px;
            background-clip: content-box;
        }
    </style>
</head>

<body class="h-screen overflow-hidden text-zinc-100 antialiased selection:bg-lime-400 selection:text-black">
    <div class="flex h-full w-full relative overflow-hidden">
        <x-layouts.backend-sidenav />

        <div class="flex flex-1 flex-col min-w-0 h-full relative transition-all duration-300 ease-in-out lg:pl-72">
            <x-layouts.backend-header />

            <main class="flex-1 bg-gray-200 overflow-y-auto custom-scrollbar">
                <div class="w-full px-4 py-6 sm:px-8 lg:px-10 pb-20">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('pmsSidebar');
            const overlay = document.getElementById('sidebarOverlay');
            // Check current state via classes
            const isHidden = sidebar.classList.contains('-translate-x-full');

            if (isHidden) {
                sidebar.classList.replace('-translate-x-full', 'translate-x-0');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.replace('translate-x-0', '-translate-x-full');
                overlay.classList.add('hidden');
            }
        }
    </script>

    @stack('scripts')
</body>

</html>
