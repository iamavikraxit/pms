{{-- PixelMoment Studio — Site Header (Tailwind CSS v4) --}}

<header id="pmsHeader"
    class="sticky top-0 z-50 w-full border-b border-white/40 bg-white/75 shadow-sm backdrop-blur-xl backdrop-saturate-200 transition-all duration-300">
    {{-- ===== Top bar / announcement strip ===== --}}
    <div
        class="w-full bg-gradient-to-r from-slate-900 via-rose-600 to-slate-900 py-1.5 text-center text-xs font-semibold tracking-widest text-white/90 uppercase">
        ✦ Book your dream session — limited slots available ✦
    </div>

    {{-- ===== Main header row ===== --}}
    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16">
        <div class="flex h-[68px] items-center justify-between gap-4">

            {{-- ── Logo ── --}}
            <a href="{{ url('/') }}" id="pmsLogo" class="flex flex-shrink-0 items-center gap-3 group">
                {{-- Badge --}}
                <div
                    class="relative flex h-11 w-11 flex-shrink-0 items-center justify-center overflow-hidden rounded-[14px] bg-gradient-to-br from-slate-900 via-slate-800 to-slate-700 shadow-lg shadow-slate-900/30 ring-1 ring-white/10 transition-transform duration-200 group-hover:scale-105">
                    <span class="relative z-10 text-[0.6rem] font-black tracking-[0.2em] text-white">PMS</span>
                    <div class="absolute inset-0 bg-gradient-to-br from-rose-500/30 to-transparent"></div>
                </div>
                {{-- Text --}}
                <div class="hidden sm:block">
                    <p class="text-[0.6rem] font-bold uppercase tracking-[0.22em] text-rose-500 leading-none">Photo
                        Booking</p>
                    <p class="text-[1.05rem] font-extrabold tracking-tight text-slate-900 leading-snug">PixelMoment
                        Studio</p>
                </div>
            </a>

            {{-- ── Desktop Navigation ── --}}
            {{-- Changed from md:flex to lg:flex --}}
            <nav class="hidden lg:flex items-center gap-1" aria-label="Main navigation">

                {{-- Home Link --}}
                <a href="{{ route('home') }}" id="navHome"
                    class="relative px-4 py-2 rounded-xl text-sm transition-colors duration-200 hover:bg-slate-900/5 {{ request()->routeIs('home') ? 'font-semibold text-slate-900' : 'font-medium text-slate-500 hover:text-slate-900' }}">
                    Home
                    @if (request()->routeIs('home'))
                        <span
                            class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-0.5 rounded-full bg-gradient-to-r from-rose-500 to-rose-400 opacity-100"></span>
                    @endif
                </a>

                {{-- Services Link --}}
                <a href="{{ url('/services') }}" id="navServices"
                    class="relative px-4 py-2 rounded-xl text-sm transition-colors duration-200 hover:bg-slate-900/5 {{ request()->is('services') ? 'font-semibold text-slate-900' : 'font-medium text-slate-500 hover:text-slate-900' }}">
                    Services
                    @if (request()->is('services'))
                        <span
                            class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-0.5 rounded-full bg-gradient-to-r from-rose-500 to-rose-400 opacity-100"></span>
                    @endif
                </a>

                {{-- Portfolio Link --}}
                <a href="{{ url('/portfolio') }}" id="navPortfolio"
                    class="relative px-4 py-2 rounded-xl text-sm transition-colors duration-200 hover:bg-slate-900/5 {{ request()->is('portfolio') ? 'font-semibold text-slate-900' : 'font-medium text-slate-500 hover:text-slate-900' }}">
                    Portfolio
                    @if (request()->is('portfolio'))
                        <span
                            class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-0.5 rounded-full bg-gradient-to-r from-rose-500 to-rose-400 opacity-100"></span>
                    @endif
                </a>

                {{-- Contact Link --}}
                <a href="{{ route('contact') }}" id="navContact"
                    class="relative px-4 py-2 rounded-xl text-sm transition-colors duration-200 hover:bg-slate-900/5 {{ request()->routeIs('contact') ? 'font-semibold text-slate-900' : 'font-medium text-slate-500 hover:text-slate-900' }}">
                    Contact
                    @if (request()->routeIs('contact'))
                        <span
                            class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-0.5 rounded-full bg-gradient-to-r from-rose-500 to-rose-400 opacity-100"></span>
                    @endif
                </a>

            </nav>

            {{-- ── Desktop Right ── --}}
            {{-- Changed from md:flex to lg:flex --}}
            <div class="hidden lg:flex items-center gap-3">

                {{-- Auth Dropdown --}}
                <div class="relative group" id="authDropdown">
                    <button id="authTrigger" aria-haspopup="true" aria-expanded="false"
                        class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/80 px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-slate-300 hover:bg-white hover:shadow-md focus:outline-none">
                        {{-- User icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        Account
                        {{-- Chevron --}}
                        <svg id="authChevron" xmlns="http://www.w3.org/2000/svg"
                            class="h-3.5 w-3.5 text-slate-400 transition-transform duration-200 group-hover:rotate-180"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    {{-- Dropdown panel --}}
                    {{-- Added group-hover states and an invisible 'before' pseudo-element to act as a hover bridge --}}
                    <div id="authMenu" role="menu"
                        class="absolute right-0 top-[calc(100%+10px)] min-w-[220px] origin-top-right rounded-2xl border border-slate-100 bg-white/95 p-2 shadow-2xl shadow-slate-900/10 backdrop-blur-xl transition-all duration-200 
                        invisible pointer-events-none opacity-0 scale-95 
                        group-hover:visible group-hover:pointer-events-auto group-hover:opacity-100 group-hover:scale-100
                        before:absolute before:-top-[10px] before:left-0 before:h-[10px] before:w-full before:content-['']">

                        <p class="px-3 pt-1.5 pb-1 text-[0.65rem] font-bold uppercase tracking-widest text-slate-400">
                            Account</p>
                        <a href="{{ url('/login') }}" id="authLoginLink" role="menuitem"
                            class="flex items-center gap-2.5 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 transition-colors duration-150 hover:bg-slate-50 hover:text-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 flex-shrink-0"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10 17 15 12 10 7" />
                                <line x1="15" y1="12" x2="3" y2="12" />
                            </svg>
                            Sign In
                        </a>

                        <div class="my-1.5 mx-3 h-px bg-slate-100"></div>

                        <a href="{{ url('/register') }}" id="authRegisterLink" role="menuitem"
                            class="mt-1 flex items-center gap-2.5 rounded-xl bg-gradient-to-br from-rose-500 to-rose-600 px-3 py-2.5 text-sm font-semibold text-white shadow-md shadow-rose-500/25 transition-all duration-150 hover:from-rose-600 hover:to-rose-700 hover:shadow-rose-500/35">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-rose-100 flex-shrink-0"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" y1="8" x2="19" y2="14" />
                                <line x1="22" y1="11" x2="16" y2="11" />
                            </svg>
                            Create Account
                        </a>
                    </div>
                </div>

                {{-- Book Now CTA --}}
                <a href="{{ url('/contact') }}" id="bookNowBtn"
                    class="inline-flex items-center gap-2 rounded-full bg-gradient-to-br from-slate-900 to-slate-800 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-slate-900/20 ring-1 ring-white/10 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-slate-900/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                    </svg>
                    Book Now
                </a>
            </div>

            {{-- ── Mobile Hamburger ── --}}
            {{-- Changed from flex md:hidden to flex lg:hidden --}}
            <button id="mobileMenuBtn" aria-label="Toggle navigation" aria-expanded="false"
                aria-controls="mobileMenu"
                class="flex lg:hidden h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white/80 shadow-sm transition-colors duration-200 hover:bg-slate-50 focus:outline-none">
                {{-- Hamburger icon lines --}}
                <div id="hamburgerIcon" class="flex flex-col gap-[5px]">
                    <span id="hLine1"
                        class="block h-0.5 w-[18px] rounded-full bg-slate-800 transition-all duration-300 origin-center"></span>
                    <span id="hLine2"
                        class="block h-0.5 w-[18px] rounded-full bg-slate-800 transition-all duration-300"></span>
                    <span id="hLine3"
                        class="block h-0.5 w-[18px] rounded-full bg-slate-800 transition-all duration-300 origin-center"></span>
                </div>
            </button>
        </div>
    </div>

    {{-- ===== Mobile Menu ===== --}}
    {{-- Changed from hidden md:hidden to hidden lg:hidden --}}
    <div id="mobileMenu" aria-hidden="true"
        class="hidden lg:hidden w-full border-t border-slate-100 bg-white/97 backdrop-blur-xl">
        <div class="w-full px-4 py-4 flex flex-col gap-1">

            {{-- Nav links --}}
            <a href="{{ route('home') }}" id="mobileNavHome"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-[0.9375rem] font-semibold text-slate-900 bg-slate-50 transition-colors duration-150 hover:bg-slate-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-rose-400 flex-shrink-0"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
                Home
            </a>

            <a href="{{ url('/services') }}" id="mobileNavServices"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-[0.9375rem] font-medium text-slate-600 transition-colors duration-150 hover:bg-slate-50 hover:text-slate-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-slate-400 flex-shrink-0"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83" />
                </svg>
                Services
            </a>

            <a href="{{ url('/portfolio') }}" id="mobileNavPortfolio"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-[0.9375rem] font-medium text-slate-600 transition-colors duration-150 hover:bg-slate-50 hover:text-slate-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-slate-400 flex-shrink-0"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                    <circle cx="8.5" cy="8.5" r="1.5" />
                    <polyline points="21 15 16 10 5 21" />
                </svg>
                Portfolio
            </a>

            <a href="{{ route('contact') }}" id="mobileNavContact"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-[0.9375rem] font-medium text-slate-600 transition-colors duration-150 hover:bg-slate-50 hover:text-slate-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-slate-400 flex-shrink-0"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.53 2 2 0 0 1 3.6 1.36h3a2 2 0 0 1 2 1.72c.127.96.36 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l.95-.95a2 2 0 0 1 2.11-.45c.907.34 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                </svg>
                Contact
            </a>

            {{-- Divider --}}
            <div class="my-2 h-px bg-slate-100 mx-2"></div>

            {{-- Auth section --}}
            <p class="px-4 text-[0.65rem] font-bold uppercase tracking-widest text-slate-400">Account</p>

            <a href="{{ url('/login') }}" id="mobileLoginBtn"
                class="flex items-center justify-center gap-2.5 rounded-2xl border border-slate-200 bg-white px-4 py-3.5 text-[0.9375rem] font-semibold text-slate-800 shadow-sm transition-all duration-200 hover:bg-slate-50 hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10 17 15 12 10 7" />
                    <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
                Sign In
            </a>

            <a href="{{ url('/register') }}" id="mobileRegisterBtn"
                class="flex items-center justify-center gap-2.5 rounded-2xl bg-gradient-to-br from-rose-500 to-rose-600 px-4 py-3.5 text-[0.9375rem] font-bold text-white shadow-lg shadow-rose-500/30 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-rose-500/40">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-rose-100" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <line x1="19" y1="8" x2="19" y2="14" />
                    <line x1="22" y1="11" x2="16" y2="11" />
                </svg>
                Create Account
            </a>

            {{-- Book Now mobile CTA --}}
            <a href="{{ url('/contact') }}" id="mobileBookNow"
                class="mt-1 flex items-center justify-center gap-2.5 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 px-4 py-3.5 text-[0.9375rem] font-bold text-white shadow-lg shadow-slate-900/25 transition-all duration-200 hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                </svg>
                Book Now
            </a>

            {{-- Safe-area padding for notched phones --}}
            <div class="h-2"></div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        (function() {
            /* ── Scroll shadow ── */
            const header = document.getElementById('pmsHeader');

            function onScroll() {
                if (window.scrollY > 12) {
                    header.classList.add('bg-white/92', 'shadow-md');
                    header.classList.remove('bg-white/75', 'shadow-sm');
                } else {
                    header.classList.remove('bg-white/92', 'shadow-md');
                    header.classList.add('bg-white/75', 'shadow-sm');
                }
            }
            window.addEventListener('scroll', onScroll, {
                passive: true
            });
            onScroll();

            /* ── Auth Dropdown ── */
            const authDropdown = document.getElementById('authDropdown');
            const authTrigger = document.getElementById('authTrigger');
            const authMenu = document.getElementById('authMenu');
            const authChevron = document.getElementById('authChevron');

            function openDropdown() {
                authMenu.classList.remove('opacity-0', 'scale-95', 'invisible', 'pointer-events-none');
                authMenu.classList.add('opacity-100', 'scale-100', 'visible', 'pointer-events-auto');
                authChevron.style.transform = 'rotate(180deg)';
                authTrigger.setAttribute('aria-expanded', 'true');
            }

            function closeDropdown() {
                authMenu.classList.add('opacity-0', 'scale-95', 'invisible', 'pointer-events-none');
                authMenu.classList.remove('opacity-100', 'scale-100', 'visible', 'pointer-events-auto');
                authChevron.style.transform = '';
                authTrigger.setAttribute('aria-expanded', 'false');
            }

            let dropdownOpen = false;
            authTrigger && authTrigger.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownOpen = !dropdownOpen;
                dropdownOpen ? openDropdown() : closeDropdown();
            });

            document.addEventListener('click', function(e) {
                if (authDropdown && !authDropdown.contains(e.target)) {
                    dropdownOpen = false;
                    closeDropdown();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && dropdownOpen) {
                    dropdownOpen = false;
                    closeDropdown();
                }
            });

            /* ── Mobile Menu ── */
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const hLine1 = document.getElementById('hLine1');
            const hLine2 = document.getElementById('hLine2');
            const hLine3 = document.getElementById('hLine3');

            let menuOpen = false;

            function openMobileMenu() {
                mobileMenu.classList.remove('hidden');
                // Animate hamburger → X
                hLine1.style.transform = 'rotate(45deg) translate(4px, 4px)';
                hLine2.style.opacity = '0';
                hLine3.style.transform = 'rotate(-45deg) translate(4px, -4px)';
                mobileMenuBtn.setAttribute('aria-expanded', 'true');
                mobileMenu.setAttribute('aria-hidden', 'false');
            }

            function closeMobileMenu() {
                mobileMenu.classList.add('hidden');
                hLine1.style.transform = '';
                hLine2.style.opacity = '1';
                hLine3.style.transform = '';
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
            }

            mobileMenuBtn && mobileMenuBtn.addEventListener('click', function() {
                menuOpen = !menuOpen;
                menuOpen ? openMobileMenu() : closeMobileMenu();
            });
        })();
    </script>
@endpush
