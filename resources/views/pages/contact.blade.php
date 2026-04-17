<x-welcome-layout>
    {{-- ===== Ultra-Premium Contact Section with Photo Stack ===== --}}
    <section
        class="min-h-screen w-full bg-[#f4f4f5] p-4 sm:p-6 lg:p-10 flex items-center justify-center relative overflow-hidden">

        {{-- Ambient Background Orbs --}}
        <div
            class="absolute top-[-10%] left-[-10%] w-[40rem] h-[40rem] rounded-full bg-rose-200/40 blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute bottom-[-10%] right-[-10%] w-[40rem] h-[40rem] rounded-full bg-slate-300/40 blur-[120px] pointer-events-none">
        </div>

        {{-- Main Container --}}
        <div
            class="relative w-full max-w-[85rem] mx-auto bg-white rounded-[2rem] sm:rounded-[3rem] shadow-2xl shadow-slate-300/50 overflow-hidden flex flex-col lg:flex-row border border-white">

            {{-- ── Left Column: The Gallery Stack & Info ── --}}
            <div class="relative w-full lg:w-5/12 bg-slate-950 flex flex-col p-8 sm:p-12 lg:p-16 overflow-hidden">

                {{-- Rich Gradient Background --}}
                <div
                    class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-rose-900/30 via-slate-950 to-slate-950">
                </div>

                {{-- Header Text --}}
                <div class="relative z-10 mb-8 sm:mb-12">
                    <div class="flex items-center gap-3 mb-6">
                        <span
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-rose-500/20 text-rose-400 border border-rose-500/30">✦</span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-white/80">PixelMoment</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.1]">
                        Let's frame your <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-rose-400 to-rose-200 italic font-serif font-medium">next
                            chapter.</span>
                    </h2>
                </div>

                {{-- 📸 Interactive Photo Stack --}}
                <div class="relative z-10 h-[280px] sm:h-[320px] w-full mt-auto mb-12">
                    {{-- Photo 1 (Background Left) --}}
                    <div
                        class="absolute top-0 left-0 w-[60%] h-[80%] rounded-xl border-[6px] border-white/10 shadow-2xl -rotate-6 transition-all duration-500 hover:rotate-0 hover:scale-105 hover:z-30 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=800&auto=format&fit=crop"
                            alt="Wedding Couple"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-80 mix-blend-luminosity hover:mix-blend-normal hover:opacity-100" />
                    </div>

                    {{-- Photo 2 (Background Right) --}}
                    <div
                        class="absolute bottom-4 right-0 w-[55%] h-[85%] rounded-xl border-[6px] border-white/10 shadow-2xl rotate-6 transition-all duration-500 hover:rotate-0 hover:scale-105 hover:z-30 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop"
                            alt="Fashion Portrait"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-80 mix-blend-luminosity hover:mix-blend-normal hover:opacity-100" />
                    </div>

                    {{-- Photo 3 (Main Hero - Center) --}}
                    <div
                        class="absolute top-[10%] left-[20%] w-[55%] h-[90%] rounded-xl border-[8px] border-white shadow-2xl z-20 transition-all duration-500 hover:scale-105 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1604537466158-719b1972feb8?q=80&w=800&auto=format&fit=crop"
                            alt="Studio Camera"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                        {{-- Little badge on the main photo --}}
                        <div
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-[0.65rem] font-bold uppercase tracking-wider text-slate-900 shadow-lg">
                            Studio Work
                        </div>
                    </div>
                </div>

                {{-- Contact Details --}}
                <div class="relative z-10 flex flex-col gap-4 border-t border-white/10 pt-6 mt-auto">
                    <a href="mailto:hello@pixelmoment.com"
                        class="group flex items-center gap-4 text-white/70 hover:text-white transition-colors">
                        <span class="text-rose-400 transition-transform group-hover:-translate-y-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </span>
                        <span class="text-sm tracking-wide">hello@pixelmoment.com</span>
                    </a>
                    <a href="tel:+15551234567"
                        class="group flex items-center gap-4 text-white/70 hover:text-white transition-colors">
                        <span class="text-rose-400 transition-transform group-hover:-translate-y-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.53 2 2 0 0 1 3.6 1.36h3a2 2 0 0 1 2 1.72c.127.96.36 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l.95-.95a2 2 0 0 1 2.11-.45c.907.34 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                            </svg>
                        </span>
                        <span class="text-sm tracking-wide">+1 (555) 123-4567</span>
                    </a>
                </div>
            </div>

            {{-- ── Right Column: Form & Profile (Light Mode) ── --}}
            <div class="w-full lg:w-7/12 p-8 sm:p-12 lg:p-16 xl:p-20 relative bg-white/50 backdrop-blur-xl">

                <div class="relative z-10 max-w-xl mx-auto lg:mx-0">

                    {{-- Photographer Mini Profile --}}
                    <div
                        class="inline-flex items-center gap-4 p-2 pr-6 mb-10 rounded-full bg-slate-50 border border-slate-200 shadow-sm transition-transform hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format&fit=crop"
                            alt="Lead Photographer" class="w-10 h-10 rounded-full object-cover shadow-inner" />
                        <div>
                            <p class="text-xs font-bold text-slate-900 leading-tight">Chat with Emma</p>
                            <p class="text-[0.65rem] font-semibold uppercase tracking-wider text-rose-500 mt-0.5">Lead
                                Photographer</p>
                        </div>
                    </div>

                    <h3 class="text-3xl font-extrabold text-slate-900 tracking-tight mb-2">Send an Inquiry</h3>
                    <p class="text-slate-500 text-sm mb-10">We would love to hear about your vision. Fill out the
                        details below and we’ll get back to you within 24 hours.</p>

                    <form action="#" method="POST" class="space-y-8">
                        @csrf

                        {{-- Name Row --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6">
                            <div class="relative z-0 w-full group">
                                <input type="text" name="first_name" id="first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors"
                                    placeholder=" " required />
                                <label for="first_name"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                    Name</label>
                            </div>

                            <div class="relative z-0 w-full group">
                                <input type="text" name="last_name" id="last_name"
                                    class="block py-2.5 px-0 w-full text-sm text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors"
                                    placeholder=" " required />
                                <label for="last_name"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                    Name</label>
                            </div>
                        </div>

                        {{-- Contact Row --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6">
                            <div class="relative z-0 w-full group">
                                <input type="email" name="email" id="email"
                                    class="block py-2.5 px-0 w-full text-sm text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors"
                                    placeholder=" " required />
                                <label for="email"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                    Address</label>
                            </div>

                            <div class="relative z-0 w-full group">
                                <input type="tel" name="phone" id="phone"
                                    class="block py-2.5 px-0 w-full text-sm text-slate-900 bg-transparent border-0 border-b-2 border-slate-200 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer transition-colors"
                                    placeholder=" " />
                                <label for="phone"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-rose-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                    (Optional)</label>
                            </div>
                        </div>

                        {{-- Custom Select for Service --}}
                        <div class="relative z-0 w-full group pt-2">
                            <label for="service"
                                class="text-[0.75rem] font-bold uppercase tracking-widest text-slate-400 mb-2 block">Session
                                Type</label>
                            <div class="relative">
                                <select name="service" id="service"
                                    class="block w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm font-medium text-slate-700 appearance-none transition-all hover:bg-slate-100 focus:border-rose-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-rose-500/10 cursor-pointer">
                                    <option value="" disabled selected>Select a session...</option>
                                    <option value="portrait">Wedding Photography</option>
                                    <option value="wedding">Pre-Wedding Shoots</option>
                                    <option value="commercial">Birthday Events</option>
                                    <option value="event">Baby Showers</option>
                                    <option value="event">Corporate Events</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {{-- Message Textarea --}}
                        <div class="relative z-0 w-full group pt-2">
                            <label for="message"
                                class="text-[0.75rem] font-bold uppercase tracking-widest text-slate-400 mb-2 block">Project
                                Details</label>
                            <textarea name="message" id="message" rows="3"
                                placeholder="Tell us about your vision, preferred dates, and any special requests..."
                                class="block w-full resize-none rounded-xl border border-slate-200 bg-slate-50 p-4 text-sm font-medium text-slate-700 transition-all hover:bg-slate-100 focus:border-rose-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-rose-500/10 placeholder-slate-400"
                                required></textarea>
                        </div>

                        {{-- Submit Button --}}
                        <div class="pt-4">
                            <button type="submit"
                                class="group relative w-full sm:w-auto inline-flex items-center justify-center gap-3 overflow-hidden rounded-full bg-slate-900 px-10 py-4 text-sm font-bold text-white transition-all duration-300 hover:bg-slate-800 hover:shadow-xl hover:shadow-slate-900/20 focus:outline-none focus:ring-4 focus:ring-slate-900/20">
                                {{-- Gradient hover effect layer --}}
                                <div
                                    class="absolute inset-0 translate-y-full bg-gradient-to-r from-rose-500 to-rose-600 transition-transform duration-300 ease-in-out group-hover:translate-y-0">
                                </div>

                                <span class="relative z-10 flex items-center gap-2">
                                    Submit Inquiry
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="transition-transform duration-300 group-hover:translate-x-1.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</x-welcome-layout>
