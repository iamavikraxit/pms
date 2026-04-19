<x-welcome-layout>
    {{-- ===== Carbon & Cyber Lime Contact Section ===== --}}
    <section class="relative w-full flex flex-col lg:flex-row bg-zinc-950 min-h-screen">

        {{-- ── Left Column: Editorial Stealth Vibe (Sticky on Desktop) ── --}}
        <div
            class="relative w-full lg:w-1/2 h-[60vh] lg:h-screen lg:sticky lg:top-0 overflow-hidden group border-r border-white/5">

            {{-- Background Image (Desaturated for high-end look) --}}
            <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?q=80&w=2000&auto=format&fit=crop"
                alt="Premium Photography Vibe"
                class="absolute inset-0 w-full h-full object-cover grayscale transition-transform duration-[20s] ease-out group-hover:scale-110 group-hover:grayscale-0" />

            {{-- Overlays --}}
            <div class="absolute inset-0 bg-zinc-950/60 transition-opacity duration-700 group-hover:bg-zinc-950/40">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-zinc-950/20"></div>

            {{-- ── Inner Content ── --}}
            <div class="relative w-full h-full flex flex-col justify-between pl-6 sm:pl-10 lg:pl-16 pr-6 py-12 lg:py-16">

                {{-- Top: Cyber Branding --}}
                <div class="flex items-center gap-3">
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-lg border border-lime-400/30 bg-zinc-900/50 text-lime-400 backdrop-blur-sm text-xs font-black tracking-widest">PM</span>
                    <span class="text-[0.65rem] sm:text-xs font-black uppercase tracking-[0.4em] text-white/70">Contact
                        Studio</span>
                </div>

                {{-- Center: Bold Typography --}}
                <div class="flex-1 flex flex-col justify-center">
                    <h2
                        class="text-6xl sm:text-7xl lg:text-8xl xl:text-9xl font-black text-white tracking-tighter leading-[0.9]">
                        Vision <br />
                        <span class="text-lime-400 italic font-light tracking-normal block sm:inline">Into</span>
                        Focus.
                    </h2>
                    <p
                        class="mt-8 text-zinc-400 text-sm sm:text-base max-w-sm leading-relaxed font-medium tracking-wide">
                        Engineered for high-performance visual storytelling. We capture raw intensity with technical
                        precision. Available for global commissions.
                    </p>
                </div>

                {{-- Container: removed strict max-w-md for mobile to allow full-width flexibility --}}
                <div class="border-t border-white/10 pt-6 mt-auto w-full">
                    {{-- Flex-col for mobile (stacking), Flex-row for tablet+ --}}
                    <div class="flex flex-col sm:flex-row sm:items-start gap-6 sm:gap-12">

                        {{-- min-w-0 is a CSS trick to allow flex items to shrink/wrap correctly --}}
                        <div class="min-w-0">
                            <p
                                class="text-[0.55rem] font-black uppercase tracking-[0.25em] text-lime-400 mb-1.5 opacity-80">
                                Technical Support
                            </p>
                            <a href="tel:+15551234567"
                                class="block text-[1.15rem] leading-tight text-white font-black hover:text-lime-400 transition-colors">
                                +1 (555) 123-4567
                            </a>
                        </div>

                        <div class="min-w-0">
                            <p
                                class="text-[0.55rem] font-black uppercase tracking-[0.25em] text-lime-400 mb-1.5 opacity-80">
                                Studio Access
                            </p>
                            <a href="mailto:hello@pixelmoment.com"
                                class="block text-[1.15rem] leading-tight text-white font-black hover:text-lime-400 transition-colors break-all">
                                hello@pixelmoment.com
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Artistic Rotated Text --}}
            <div class="absolute right-4 top-1/2 -translate-y-1/2 rotate-180 hidden xl:block"
                style="writing-mode: vertical-rl;">
                <p class="text-[0.55rem] font-black uppercase tracking-[0.5em] text-white/10">Engineered for Vision —
                    Est. 2026</p>
            </div>
        </div>

        {{-- ── Right Column: Form Area (Cyber-Glass Style) ── --}}
        <div class="w-full lg:w-1/2 bg-zinc-950 relative overflow-hidden px-6 sm:px-12 lg:px-16 py-16 sm:py-24">

            {{-- Background decorative glows --}}
            <div
                class="absolute top-0 right-0 w-[30rem] h-[30rem] bg-lime-400/5 rounded-full blur-[100px] pointer-events-none">
            </div>

            <div class="w-full max-w-2xl relative z-10">

                {{-- Lead Badge --}}
                <div
                    class="inline-flex items-center gap-4 p-2 pr-6 mb-12 rounded-2xl bg-zinc-900 border border-white/5 shadow-2xl transition-transform hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format&fit=crop"
                        alt="Lead Photographer"
                        class="w-12 h-12 rounded-xl object-cover grayscale group-hover:grayscale-0" />
                    <div>
                        <p class="text-sm font-black text-white leading-tight">Sync with Emma</p>
                        <p class="text-[0.65rem] font-bold uppercase tracking-widest text-lime-400 mt-1">Lead Creative
                            Director</p>
                    </div>
                </div>

                <div class="mb-12">
                    <h3 class="text-4xl sm:text-5xl font-black text-white tracking-tighter mb-4 uppercase">Initialize
                        Inquiry</h3>
                    <p class="text-zinc-500 text-sm sm:text-base leading-relaxed max-w-lg">We accept a limited number of
                        technical commissions. Provide your project details below to begin the synchronization process.
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-10">
                    @csrf

                    {{-- Input Rows with Cyber Styling --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
                        <div class="relative group">
                            <input type="text" name="first_name" id="first_name"
                                class="block py-3 px-0 w-full text-white bg-transparent border-0 border-b-2 border-zinc-800 appearance-none focus:outline-none focus:ring-0 focus:border-lime-400 peer transition-colors font-bold"
                                placeholder=" " required />
                            <label for="first_name"
                                class="absolute text-xs font-black uppercase tracking-widest text-zinc-600 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8 peer-focus:text-lime-400">First
                                Name</label>
                        </div>
                        <div class="relative group">
                            <input type="text" name="last_name" id="last_name"
                                class="block py-3 px-0 w-full text-white bg-transparent border-0 border-b-2 border-zinc-800 appearance-none focus:outline-none focus:ring-0 focus:border-lime-400 peer transition-colors font-bold"
                                placeholder=" " required />
                            <label for="last_name"
                                class="absolute text-xs font-black uppercase tracking-widest text-zinc-600 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8 peer-focus:text-lime-400">Last
                                Name</label>
                        </div>
                    </div>

                    {{-- Contact Info Row --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
                        <div class="relative group">
                            <input type="email" name="email" id="email"
                                class="block py-3 px-0 w-full text-white bg-transparent border-0 border-b-2 border-zinc-800 appearance-none focus:outline-none focus:ring-0 focus:border-lime-400 peer transition-colors font-bold"
                                placeholder=" " required />
                            <label for="email"
                                class="absolute text-xs font-black uppercase tracking-widest text-zinc-600 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8 peer-focus:text-lime-400">Project
                                Email</label>
                        </div>
                        <div class="relative group">
                            <input type="tel" name="phone" id="phone"
                                class="block py-3 px-0 w-full text-white bg-transparent border-0 border-b-2 border-zinc-800 appearance-none focus:outline-none focus:ring-0 focus:border-lime-400 peer transition-colors font-bold"
                                placeholder=" " />
                            <label for="phone"
                                class="absolute text-xs font-black uppercase tracking-widest text-zinc-600 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8 peer-focus:text-lime-400">Mobile
                                Link</label>
                        </div>
                    </div>

                    {{-- Category Selection (Cyber Pills) --}}
                    <div class="pt-4">
                        <label
                            class="text-[0.65rem] font-black uppercase tracking-[0.25em] text-zinc-600 mb-5 block">Select
                            Project Module</label>
                        <div class="flex flex-wrap gap-3">
                            @foreach (['Wedding', 'Pre-Wedding', 'Birthday', 'Baby Shower', 'Corporate'] as $cat)
                                <label class="cursor-pointer">
                                    <input type="radio" name="service" value="{{ strtolower($cat) }}"
                                        class="peer hidden" />
                                    <span
                                        class="px-5 py-3 rounded-xl border border-white/5 bg-zinc-900 text-[0.65rem] font-black uppercase tracking-widest text-zinc-500 transition-all peer-checked:bg-lime-400 peer-checked:text-zinc-950 peer-checked:border-lime-400 active:scale-95 inline-block">
                                        {{ $cat }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Message Area --}}
                    <div class="pt-4">
                        <label for="message"
                            class="text-[0.65rem] font-black uppercase tracking-[0.25em] text-zinc-600 mb-3 block">Project
                            Specs</label>
                        <textarea name="message" id="message" rows="4"
                            placeholder="Brief us on your requirements, location, and key dates..."
                            class="block w-full resize-none rounded-2xl border border-white/5 bg-zinc-900 p-5 text-sm font-bold text-white transition-all placeholder-zinc-700 focus:border-lime-400/50 focus:outline-none focus:ring-4 focus:ring-lime-400/5"></textarea>
                    </div>

                    {{-- Submit Button (High-Vis) --}}
                    <div class="pt-6">
                        <button type="submit"
                            class="group relative w-full inline-flex items-center justify-center gap-3 overflow-hidden rounded-full bg-lime-400 px-10 py-5 text-sm font-black uppercase tracking-[0.2em] text-zinc-950 transition-all duration-300 hover:bg-white hover:shadow-xl hover:shadow-lime-400/20">
                            <span class="relative z-10 flex items-center gap-3">
                                Transmit Inquiry
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="transition-transform duration-300 group-hover:translate-x-2">
                                    <path d="m22 2-7 20-4-9-9-4Z" />
                                    <path d="M22 2 11 13" />
                                </svg>
                            </span>
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </section>
</x-welcome-layout>
