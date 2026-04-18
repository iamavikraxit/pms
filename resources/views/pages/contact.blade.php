<x-welcome-layout>
    {{-- ===== Premium Editorial Contact Section ===== --}}
    <section class="relative w-full flex flex-col lg:flex-row bg-[#fafafa] min-h-screen">

        {{-- ── Left Column: Editorial Magazine Vibe (Sticky on Desktop) ── --}}
        <div class="relative w-full lg:w-1/2 h-[60vh] lg:h-screen lg:sticky lg:top-0 overflow-hidden group">

            {{-- Background Image (Full Bleed, slowly zooms on hover) --}}
            <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?q=80&w=2000&auto=format&fit=crop"
                 alt="Premium Photography Vibe"
                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-[20s] ease-out group-hover:scale-110" />

            {{-- Film Grain & Gradient Overlays --}}
            <div class="absolute inset-0 bg-black/30 transition-opacity duration-700 group-hover:bg-black/40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-black/40"></div>
            <div class="absolute inset-0 opacity-[0.04] mix-blend-overlay pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.8%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>

            {{-- ── Inner Content Container (Respecting your exact Header Padding) ── --}}
            <div class="relative w-full h-full flex flex-col justify-between pl-4 sm:pl-6 lg:pl-10 xl:pl-16 pr-4 sm:pr-8 lg:pr-16 py-8 sm:py-12 lg:py-16">

                {{-- Top: Minimal Branding --}}
                <div class="flex items-center gap-3">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full border border-white/30 text-white backdrop-blur-sm text-sm">✦</span>
                    <span class="text-[0.65rem] sm:text-xs font-bold uppercase tracking-[0.3em] text-white">PixelMoment</span>
                </div>

                {{-- Center: Bold High-Fashion Typography --}}
                <div class="flex-1 flex flex-col justify-center mt-8 lg:mt-0">
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-medium text-white tracking-tighter leading-[1.05]">
                        Capture <br/>
                        <span class="text-rose-200 italic font-serif font-light tracking-normal pr-4">the</span>
                        essence.
                    </h2>
                    <p class="mt-6 text-white/80 text-sm sm:text-base max-w-md leading-relaxed font-light tracking-wide">
                        Specializing in raw emotions, timeless editorial elegance, and authentic storytelling. Available worldwide.
                    </p>
                </div>

                {{-- Bottom: Ultra-clean Contact Info --}}
                <div class="border-t border-white/20 pt-6 sm:pt-8 w-full max-w-md">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <p class="text-[0.55rem] sm:text-[0.6rem] font-bold uppercase tracking-[0.2em] text-white/50 mb-2">Direct Line</p>
                            <a href="tel:+15551234567" class="text-sm sm:text-base text-white hover:text-rose-300 transition-colors">+1 (555) 123-4567</a>
                        </div>
                        <div>
                            <p class="text-[0.55rem] sm:text-[0.6rem] font-bold uppercase tracking-[0.2em] text-white/50 mb-2">Studio Email</p>
                            <a href="mailto:hello@pixelmoment.com" class="text-sm sm:text-base text-white hover:text-rose-300 transition-colors">hello@pixelmoment.com</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Artistic Rotated Text (Right Edge) --}}
            <div class="absolute right-4 top-1/2 -translate-y-1/2 rotate-180 hidden lg:block" style="writing-mode: vertical-rl;">
                <p class="text-[0.6rem] font-bold uppercase tracking-[0.4em] text-white/30">Est. 2026 — Bookings Open</p>
            </div>
        </div>

        {{-- ── Right Column: Form Area (Scrollable, Kept exactly as you liked it) ── --}}
        <div class="w-full lg:w-1/2 flex justify-start lg:justify-center bg-[#fafafa] relative overflow-hidden pl-4 sm:pl-8 lg:pl-12 pr-4 sm:pr-6 lg:pr-10 xl:pr-16 py-12 sm:py-16 lg:py-24">

            {{-- Background decorative blur --}}
            <div class="absolute top-0 right-0 w-[30rem] sm:w-[40rem] h-[30rem] sm:h-[40rem] bg-rose-100/60 rounded-full blur-[80px] sm:blur-[100px] pointer-events-none -translate-y-1/2 translate-x-1/3"></div>

            {{-- Form Container --}}
            <div class="w-full max-w-2xl relative z-10">

                {{-- Photographer Badge --}}
                <div class="inline-flex items-center gap-3 sm:gap-4 p-2 pr-5 sm:pr-6 mb-8 sm:mb-12 rounded-full bg-white border border-slate-200 shadow-sm transition-transform hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format&fit=crop"
                        alt="Lead Photographer" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover" />
                    <div>
                        <p class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">Chat with Emma</p>
                        <p class="text-[0.65rem] sm:text-[0.7rem] font-semibold uppercase tracking-wider text-rose-500 mt-0.5">Lead Photographer</p>
                    </div>
                </div>

                <div class="mb-10 sm:mb-12">
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-3 sm:mb-4">Send an Inquiry</h3>
                    <p class="text-slate-500 text-sm sm:text-base leading-relaxed">We take on a limited number of commissions each year to ensure the highest quality. Fill out the details below, and let's create something beautiful.</p>
                </div>

                <form action="#" method="POST" class="space-y-8 sm:space-y-10">
                    @csrf

                    {{-- Name Row --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6 lg:gap-8">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="first_name" id="first_name" class="block py-2.5 sm:py-3 px-0 w-full text-sm sm:text-base text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors" placeholder=" " required />
                            <label for="first_name" class="peer-focus:font-medium absolute text-sm sm:text-base text-slate-500 duration-300 transform -translate-y-6 sm:-translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 sm:peer-focus:-translate-y-8">First Name</label>
                        </div>

                        <div class="relative z-0 w-full group">
                            <input type="text" name="last_name" id="last_name" class="block py-2.5 sm:py-3 px-0 w-full text-sm sm:text-base text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors" placeholder=" " required />
                            <label for="last_name" class="peer-focus:font-medium absolute text-sm sm:text-base text-slate-500 duration-300 transform -translate-y-6 sm:-translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 sm:peer-focus:-translate-y-8">Last Name</label>
                        </div>
                    </div>

                    {{-- Contact Row --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6 lg:gap-8">
                        <div class="relative z-0 w-full group">
                            <input type="email" name="email" id="email" class="block py-2.5 sm:py-3 px-0 w-full text-sm sm:text-base text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors" placeholder=" " required />
                            <label for="email" class="peer-focus:font-medium absolute text-sm sm:text-base text-slate-500 duration-300 transform -translate-y-6 sm:-translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 sm:peer-focus:-translate-y-8">Email Address</label>
                        </div>

                        <div class="relative z-0 w-full group">
                            <input type="tel" name="phone" id="phone" class="block py-2.5 sm:py-3 px-0 w-full text-sm sm:text-base text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors" placeholder=" " />
                            <label for="phone" class="peer-focus:font-medium absolute text-sm sm:text-base text-slate-500 duration-300 transform -translate-y-6 sm:-translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 sm:peer-focus:-translate-y-8">Phone Number</label>
                        </div>
                    </div>

                    {{-- Session Type (Premium Icon Pills) --}}
                    <div class="w-full pt-2 sm:pt-4">
                        <label class="text-[0.7rem] sm:text-[0.75rem] font-bold uppercase tracking-widest text-slate-400 mb-3 sm:mb-4 block">
                            What are you looking for?
                        </label>

                        <div class="flex flex-wrap gap-2.5 sm:gap-3">
                            {{-- Wedding --}}
                            <label class="cursor-pointer group relative">
                                <input type="radio" name="service" value="wedding" class="peer hidden" required />
                                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl border-2 border-slate-100 bg-white text-xs sm:text-sm font-bold text-slate-500 transition-all duration-200 ease-in-out group-hover:border-slate-200 group-hover:bg-slate-50 peer-checked:border-slate-900 peer-checked:bg-slate-900 peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-slate-900/20 active:scale-95">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-70 peer-checked:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                    </svg>
                                    Wedding
                                </span>
                            </label>

                            {{-- Pre-Wedding --}}
                            <label class="cursor-pointer group relative">
                                <input type="radio" name="service" value="pre-wedding" class="peer hidden" />
                                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl border-2 border-slate-100 bg-white text-xs sm:text-sm font-bold text-slate-500 transition-all duration-200 ease-in-out group-hover:border-slate-200 group-hover:bg-slate-50 peer-checked:border-slate-900 peer-checked:bg-slate-900 peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-slate-900/20 active:scale-95">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-70 peer-checked:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z" />
                                        <circle cx="12" cy="13" r="3" />
                                    </svg>
                                    Pre-Wedding
                                </span>
                            </label>

                            {{-- Birthday --}}
                            <label class="cursor-pointer group relative">
                                <input type="radio" name="service" value="birthday" class="peer hidden" />
                                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl border-2 border-slate-100 bg-white text-xs sm:text-sm font-bold text-slate-500 transition-all duration-200 ease-in-out group-hover:border-slate-200 group-hover:bg-slate-50 peer-checked:border-slate-900 peer-checked:bg-slate-900 peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-slate-900/20 active:scale-95">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-70 peer-checked:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="8" width="18" height="4" rx="1" />
                                        <path d="M12 8v13" /><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7" />
                                        <path d="M7.5 8a2.5 2.5 0 0 1 0-5 A4.8 8 0 0 1 12 8 a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5" />
                                    </svg>
                                    Birthday
                                </span>
                            </label>

                            {{-- Baby Shower --}}
                            <label class="cursor-pointer group relative">
                                <input type="radio" name="service" value="baby-shower" class="peer hidden" />
                                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl border-2 border-slate-100 bg-white text-xs sm:text-sm font-bold text-slate-500 transition-all duration-200 ease-in-out group-hover:border-slate-200 group-hover:bg-slate-50 peer-checked:border-slate-900 peer-checked:bg-slate-900 peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-slate-900/20 active:scale-95">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-70 peer-checked:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                                    </svg>
                                    Baby Shower
                                </span>
                            </label>

                            {{-- Corporate --}}
                            <label class="cursor-pointer group relative">
                                <input type="radio" name="service" value="corporate" class="peer hidden" />
                                <span class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl border-2 border-slate-100 bg-white text-xs sm:text-sm font-bold text-slate-500 transition-all duration-200 ease-in-out group-hover:border-slate-200 group-hover:bg-slate-50 peer-checked:border-slate-900 peer-checked:bg-slate-900 peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-slate-900/20 active:scale-95">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-70 peer-checked:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                    </svg>
                                    Corporate
                                </span>
                            </label>
                        </div>
                    </div>

                    {{-- Message Textarea --}}
                    <div class="relative z-0 w-full pt-2 sm:pt-4 group">
                        <label for="message" class="text-[0.7rem] sm:text-[0.75rem] font-bold uppercase tracking-widest text-slate-400 mb-2 sm:mb-3 block">Describe Your Queries</label>
                        <textarea name="message" id="message" rows="4" placeholder="Tell us about your venue, preferred dates, and any specific ideas you have..." class="block w-full resize-none rounded-2xl border border-slate-200 bg-white p-4 sm:p-5 text-sm sm:text-base font-medium text-slate-700 transition-all shadow-sm hover:border-slate-300 focus:border-rose-500 focus:outline-none focus:ring-4 focus:ring-rose-500/10 placeholder-slate-400" required></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-4 sm:pt-6">
                        <button type="submit" class="group relative w-full inline-flex items-center justify-center gap-3 overflow-hidden rounded-full bg-slate-900 px-8 sm:px-10 py-4 sm:py-5 text-sm sm:text-base font-bold text-white transition-all duration-300 hover:bg-slate-800 hover:shadow-xl hover:shadow-slate-900/20 focus:outline-none focus:ring-4 focus:ring-slate-900/20">
                            {{-- Gradient hover effect layer --}}
                            <div class="absolute inset-0 translate-y-full bg-gradient-to-r from-rose-500 to-rose-600 transition-transform duration-300 ease-in-out group-hover:translate-y-0"></div>

                            <span class="relative z-10 flex items-center gap-2 sm:gap-3">
                                Send Inquiry
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300 group-hover:translate-x-1.5"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            </span>
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </section>
</x-welcome-layout>
