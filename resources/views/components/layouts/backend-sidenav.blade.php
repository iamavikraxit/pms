<div id="sidebarOverlay" onclick="toggleSidebar()"
    class="fixed inset-0 z-[50] bg-zinc-800 backdrop-blur-sm hidden lg:hidden transition-opacity duration-300 opacity-0">
</div>

<aside id="pmsSidebar"
    class="fixed inset-y-0 left-0 z-[60] w-72 transform border-r border-orange-100 bg-white/60 backdrop-blur-xl transition-all duration-300 ease-in-out lg:translate-x-0 -translate-x-full flex flex-col shadow-xl shadow-orange-950/5">

    <div class="flex h-16 items-center px-6 border-b border-orange-100">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3.5 group">
            <div class="relative">
                <div
                    class="absolute -inset-1 bg-orange-500/10 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <div
                    class="relative flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-orange-50 to-orange-100/50 border border-orange-200/50 group-hover:border-orange-500/50 transition-all duration-300 shadow-md">
                    <span class="text-[10px] font-black tracking-widest text-orange-600">PM</span>
                    <div class="absolute top-1 right-1 h-1 w-1 rounded-full bg-orange-500/50"></div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex items-center gap-1.5">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-stone-400 leading-none">Photo
                        Booking</span>
                </div>
                <span class="text-lg font-black tracking-tight text-stone-900 leading-none mt-1 pr-2">
                    Pixel <span class="text-orange-600">Moment</span>
                </span>
            </div>
        </a>
    </div>

    <nav class="flex-1 overflow-y-auto p-4 space-y-6 custom-scrollbar">
        <!-- 1. CORE OVERVIEW -->
        <div>
            <p class="px-4 text-[9px] font-black uppercase tracking-[0.25em] text-stone-400 mb-3">Core Overview</p>
            <div class="space-y-1">
                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                    class="group flex items-center gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold transition-all duration-300
                    {{ request()->routeIs('dashboard')
                        ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg shadow-orange-500/25'
                        : 'text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 hover:translate-x-1' }}">

                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span>Dashboard</span>
                </a>

                {{-- Role Managements --}}
                <div>
                    <button id="rolesDropdownBtn" onclick="toggleDropdown('rolesDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold transition-all duration-300
                    {{ request()->routeIs('roles') || request()->routeIs('permissions')
                        ? 'text-orange-600 bg-orange-50/50'
                        : 'text-stone-600 hover:text-orange-600 hover:bg-orange-50/50' }}">

                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 transition-colors
                                {{ request()->routeIs('roles') || request()->routeIs('permissions')
                                    ? 'text-orange-600'
                                    : 'text-stone-400 group-hover:text-orange-600' }}"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>

                            <span>Roles & Permissions</span>
                        </div>

                        <svg id="rolesDropdownArrow"
                            class="w-4 h-4 transition-transform duration-300
                            {{ request()->routeIs('roles') || request()->routeIs('permissions')
                                ? 'rotate-180 text-orange-600'
                                : 'text-stone-400 group-hover:text-orange-600' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="rolesDropdownMenu"
                        style="max-height: {{ request()->routeIs('roles') || request()->routeIs('permissions') ? '500px' : '0px' }};"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">

                        {{-- Roles --}}
                        <a href="{{ route('roles') }}"
                            class="flex items-center gap-2 text-xs font-bold py-2 transition-colors
                            {{ request()->routeIs('roles') ? 'text-orange-600' : 'text-stone-500 hover:text-orange-600' }}">

                            <span
                                class="h-1.5 w-1.5 rounded-full
                            {{ request()->routeIs('roles') ? 'bg-orange-500' : 'bg-stone-300' }}">
                            </span>

                            Roles List
                        </a>

                        {{-- Permissions --}}
                        <a href="{{ route('permissions') }}"
                            class="flex items-center gap-2 text-xs font-bold py-2 transition-colors
                            {{ request()->routeIs('permissions') ? 'text-orange-600' : 'text-stone-500 hover:text-orange-600' }}">

                            <span
                                class="h-1.5 w-1.5 rounded-full
                            {{ request()->routeIs('permissions') ? 'bg-orange-500' : 'bg-stone-300' }}">
                            </span>

                            Permissions List
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. STUDIO OPERATIONS -->
        <div>
            <p class="px-4 text-[9px] font-black uppercase tracking-[0.25em] text-stone-400 mb-3">Studio Operations</p>
            <div class="space-y-1">
                {{-- Projects Dropdown --}}
                <div>
                    <button id="projectsDropdownBtn" onclick="toggleDropdown('projectsDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 transition-all duration-300">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <span>Projects</span>
                        </div>
                        <svg id="projectsDropdownArrow"
                            class="w-4 h-4 text-stone-400 group-hover:text-orange-600 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="projectsDropdownMenu" style="max-height: 0px;"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Active Projects
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Production Queue
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Archived Works
                        </a>
                    </div>
                </div>

                {{-- Shoots & Bookings Dropdown --}}
                <div>
                    <button id="bookingsDropdownBtn" onclick="toggleDropdown('bookingsDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 transition-all duration-300">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Bookings & Shoots</span>
                        </div>
                        <svg id="bookingsDropdownArrow"
                            class="w-4 h-4 text-stone-400 group-hover:text-orange-600 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="bookingsDropdownMenu" style="max-height: 0px;"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Upcoming Shoots
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Shoot Calendar
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Packages & Add-ons
                        </a>
                    </div>
                </div>

                {{-- Calendar Link --}}
                <a href="#"
                    class="group flex items-center gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 hover:translate-x-1 transition-all duration-300">
                    <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Studio Calendar</span>
                </a>
            </div>
        </div>

        <!-- 3. MEDIA & DELIVERY -->
        <div>
            <p class="px-4 text-[9px] font-black uppercase tracking-[0.25em] text-stone-400 mb-3">Media & Delivery</p>
            <div class="space-y-1">
                {{-- Media Vault Dropdown --}}
                <div>
                    <button id="mediaDropdownBtn" onclick="toggleDropdown('mediaDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 transition-all duration-300">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Media Vault</span>
                        </div>
                        <svg id="mediaDropdownArrow"
                            class="w-4 h-4 text-stone-400 group-hover:text-orange-600 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="mediaDropdownMenu" style="max-height: 0px;"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Client Galleries
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Proofing Portals
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Cloud Backups
                        </a>
                    </div>
                </div>

                {{-- CRM Dropdown --}}
                <div>
                    <button id="crmDropdownBtn" onclick="toggleDropdown('crmDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 transition-all duration-300">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Client Relations</span>
                        </div>
                        <svg id="crmDropdownArrow"
                            class="w-4 h-4 text-stone-400 group-hover:text-orange-600 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="crmDropdownMenu" style="max-height: 0px;"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Client Directory
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Leads & Inquiries
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Feedback Survey
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. FINANCE & SETTINGS -->
        <div>
            <p class="px-4 text-[9px] font-black uppercase tracking-[0.25em] text-stone-400 mb-3">Finance &
                Administration</p>
            <div class="space-y-1">
                {{-- Invoices & Finance Dropdown --}}
                <div>
                    <button id="financeDropdownBtn" onclick="toggleDropdown('financeDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold text-stone-600 hover:text-orange-600 hover:bg-orange-50/50 transition-all duration-300">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 text-stone-400 group-hover:text-orange-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Finance & Billing</span>
                        </div>
                        <svg id="financeDropdownArrow"
                            class="w-4 h-4 text-stone-400 group-hover:text-orange-600 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="financeDropdownMenu" style="max-height: 0px;"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Invoices List
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Payment Records
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Expense Tracker
                        </a>
                    </div>
                </div>

                {{-- Settings Dropdown --}}
                <div>
                    <button id="settingsDropdownBtn" onclick="toggleDropdown('settingsDropdown')"
                        class="w-full group flex items-center justify-between gap-3.5 rounded-2xl px-4 py-3 text-sm font-bold transition-all duration-300
                    {{ request()->routeIs('staff')
                        ? 'text-orange-600 bg-orange-50/50'
                        : 'text-stone-600 hover:text-orange-600 hover:bg-orange-50/50' }}">
                        <div class="flex items-center gap-3.5">
                            <svg class="h-5 w-5 transition-colors
                                {{ request()->routeIs('staff')
                                    ? 'text-orange-600'
                                    : 'text-stone-400 group-hover:text-orange-600' }}"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Studio Settings</span>
                        </div>
                        <svg id="settingsDropdownArrow"
                            class="w-4 h-4 transition-transform duration-300
                            {{ request()->routeIs('staff')
                                ? 'rotate-180 text-orange-600'
                                : 'text-stone-400 group-hover:text-orange-600' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="settingsDropdownMenu"
                        style="max-height: {{ request()->routeIs('staff') ? '500px' : '0px' }};"
                        class="overflow-hidden transition-all duration-300 ease-in-out pl-12 pr-4 space-y-1">
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            General Profile
                        </a>
                        <a href="{{ route('staff') }}"
                            class="flex items-center gap-2 text-xs font-bold py-2 transition-colors
                            {{ request()->routeIs('staff') ? 'text-orange-600' : 'text-stone-500 hover:text-orange-600' }}">
                            <span
                                class="h-1.5 w-1.5 rounded-full
                            {{ request()->routeIs('staff') ? 'bg-orange-500' : 'bg-stone-300' }}">
                            </span>
                            Staff & Permissions
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-xs font-bold text-stone-500 hover:text-orange-600 py-2 transition-colors">
                            <span class="h-1.5 w-1.5 rounded-full bg-stone-300 group-hover:bg-orange-500"></span>
                            Integrations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="p-3 border-t border-orange-100 bg-orange-50/30">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold text-stone-600 hover:text-red-600 hover:bg-red-50 transition-all group">
                <svg class="w-5 h-5 text-stone-400 group-hover:text-red-500 transition-colors" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>System Logout</span>
            </button>
        </form>
    </div>
</aside>

<script>
    function toggleDropdown(id) {
        const menu = document.getElementById(id + 'Menu');
        const arrow = document.getElementById(id + 'Arrow');
        const button = document.getElementById(id + 'Btn');

        if (!menu || !arrow || !button) return;

        const isClosed = menu.style.maxHeight === '0px' || !menu.style.maxHeight;

        if (isClosed) {
            // Close other menus for a clean single-open accordion feel
            document.querySelectorAll('[id$="Menu"]').forEach(m => {
                if (m.id !== id + 'Menu') {
                    m.style.maxHeight = '0px';
                    const otherId = m.id.replace('Menu', '');
                    const otherArrow = document.getElementById(otherId + 'Arrow');
                    const otherBtn = document.getElementById(otherId + 'Btn');
                    if (otherArrow) otherArrow.classList.remove('rotate-180');
                    if (otherBtn) {
                        otherBtn.classList.remove('text-orange-600', 'bg-orange-50/50');
                        otherBtn.classList.add('text-stone-600');
                    }
                }
            });

            // Open target menu
            menu.style.maxHeight = menu.scrollHeight + 'px';
            arrow.classList.add('rotate-180');
            button.classList.add('text-orange-600', 'bg-orange-50/50');
            button.classList.remove('text-stone-600');
        } else {
            // Close target menu
            menu.style.maxHeight = '0px';
            arrow.classList.remove('rotate-180');
            button.classList.remove('text-orange-600', 'bg-orange-50/50');
            button.classList.add('text-stone-600');
        }
    }
</script>
