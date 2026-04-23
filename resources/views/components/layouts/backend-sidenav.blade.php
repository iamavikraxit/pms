<div id="sidebarOverlay" onclick="toggleSidebar()"
    class="fixed inset-0 z-[50] bg-zinc-800 backdrop-blur-sm hidden lg:hidden transition-opacity duration-300 opacity-0">
</div>

<aside id="pmsSidebar"
    class="fixed inset-y-0 left-0 z-[60] w-72 transform border-r border-white/5 bg-zinc-800 transition-all duration-300 ease-in-out lg:translate-x-0 -translate-x-full flex flex-col shadow-2xl">

    <div class="flex h-24 items-center px-6 border-b border-white/5">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3.5 group">
            <div class="relative">
                <div
                    class="absolute -inset-1 bg-lime-400/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <div
                    class="relative flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-zinc-800 to-zinc-950 border border-white/10 group-hover:border-lime-400/50 transition-all duration-300 shadow-2xl">
                    <span class="text-[10px] font-black tracking-widest text-lime-400">PM</span>
                    <div class="absolute top-1 right-1 h-1 w-1 rounded-full bg-lime-400/50"></div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex items-center gap-1.5">
                    {{-- <span class="h-px w-3 bg-lime-400/50"></span> --}}
                    <span
                        class="text-[9px] font-black uppercase tracking-[0.3em] text-zinc-500 leading-none">Phpto Booking</span>
                </div>
                <span class="text-lg font-black tracking-tight text-white leading-none mt-1">
                    Pixel<span class="text-lime-400">Moment</span>
                </span>
            </div>
        </a>
    </div>

    <nav class="flex-1 overflow-y-auto p-4 space-y-8 custom-scrollbar">
        <div>
            <p class="px-4 text-[10px] font-black uppercase tracking-[0.25em] text-zinc-600 mb-6">Main Menus</p>
            <div class="space-y-1.5">
                <a href="{{ route('dashboard') }}"
                    class="group flex items-center gap-4 rounded-2xl bg-white/[0.03] border border-white/5 px-4 py-3.5 text-sm font-bold text-lime-400 shadow-lg transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="#"
                    class="group flex items-center gap-4 rounded-2xl px-4 py-3.5 text-sm font-bold text-zinc-500 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="h-5 w-5 opacity-50 group-hover:opacity-100" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <span>Projects</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="p-4 border-t border-white/5 bg-black/20">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-3.5 rounded-xl text-sm font-bold text-zinc-500 hover:text-red-400 hover:bg-red-400/10 transition-all group">
                <svg class="w-5 h-5 text-zinc-600 group-hover:text-red-400 transition-colors" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>System Logout</span>
            </button>
        </form>
    </div>
</aside>
