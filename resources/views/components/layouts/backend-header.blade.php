<header id="dashHeader"
    class="sticky top-0 z-40 w-full border-b border-white/5 bg-zinc-800 backdrop-blur-xl transition-all duration-300">

    <div class="flex h-16 items-center justify-between px-4 sm:px-6 lg:px-8">
        {{-- LEFT: Toggle & Branding --}}
        <div class="flex items-center gap-3 sm:gap-4 flex-1">
            <button onclick="toggleSidebar()"
                class="lg:hidden flex items-center justify-center h-10 w-10 rounded-xl border border-white/10 bg-zinc-800 text-zinc-400 hover:bg-zinc-700 hover:text-white active:scale-95 transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="hidden sm:flex items-center gap-2">
                <div class="h-6 w-[2px] bg-lime-500/50"></div>
                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-zinc-500">Workspace</span>
            </div>
        </div>

        {{-- RIGHT: Actions --}}
        <div class="flex items-center gap-2 sm:gap-4 ml-4">
            {{-- Dark Action Button --}}
            <button
                class="hidden md:flex items-center gap-2 bg-zinc-800 border border-white/10 hover:border-lime-400/50 text-white px-4 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider transition-all shadow-xl active:scale-95 group">
                <svg class="w-4 h-4 text-lime-400 group-hover:rotate-90 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                <span>New Project</span>
            </button>

            {{-- Notification Button --}}
            <button
                class="relative flex h-10 w-10 items-center justify-center rounded-xl border border-white/5 bg-zinc-800 text-zinc-400 hover:bg-zinc-700 hover:text-lime-400 transition-all shadow-inner">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path
                        d="M15 17h5l-1.4-1.4A2 2 0 0 1 18 14V11a6 6 0 0 0-4-5.7V5a2 2 0 1 0-4 0v.3A6 6 0 0 0 6 11v3a2 2 0 0 1-.6 1.4L4 17h5m6 0v1a3 3 0 1 1-6 0v-1" />
                </svg>
                <span class="absolute top-3 right-3 h-2 w-2 rounded-full bg-lime-500 ring-2 ring-zinc-900"></span>
            </button>

            <div class="h-8 w-px bg-white/5 mx-1 hidden sm:block"></div>

            {{-- User Profile Card --}}
            <button
                class="flex items-center gap-3 p-1 pr-3 rounded-2xl border border-white/5 bg-zinc-800/50 hover:bg-zinc-800 hover:border-white/10 transition-all group">
                <div class="relative">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=27272a&color=a3e635"
                        class="h-8 w-8 rounded-xl object-cover ring-1 ring-white/10 group-hover:ring-lime-400/50 transition-all">
                </div>
                <div class="hidden lg:block text-left max-w-[120px]">
                    <p class="text-[10px] font-black uppercase tracking-tighter text-white leading-none truncate">
                        {{ auth()->user()->name }}</p>
                    <p class="text-[9px] font-bold text-zinc-500 uppercase mt-1">Admin</p>
                </div>
            </button>
        </div>
    </div>
</header>
