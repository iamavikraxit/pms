{{-- ============================================================
     TESTIMONIALS — Carbon & Cyber Lime Edition
============================================================ --}}
<section id="testimonials" class="relative w-full overflow-hidden bg-zinc-950 py-20 lg:py-28">

    {{-- Ambient light & background --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        {{-- Subtle Lime glow in the center --}}
        <div
            class="absolute -top-20 left-1/2 h-[400px] w-[600px] -translate-x-1/2 rounded-full bg-lime-400/5 blur-[100px]">
        </div>
    </div>

    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        <div class="text-center">
            {{-- Accent Tag --}}
            <span
                class="inline-flex items-center rounded-full bg-zinc-900 border border-white/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-lime-400">
                Testimonials
            </span>
            <h2 class="mx-auto mt-4 max-w-2xl text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">
                Loved by 500+ Clients
            </h2>
            <div class="mt-4 flex items-center justify-center gap-1 text-lime-400">
                @for ($s = 0; $s < 5; $s++)
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                @endfor
                <span class="ml-2 text-sm font-bold tracking-widest text-zinc-400 uppercase">4.9 / 5 · 500+
                    Reviews</span>
            </div>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
        ['Priya Sharma', 'Wedding Client', 'Our wedding photos were absolutely breathtaking. PixelMoment exceeded every expectation. The team was professional, creative, and made us feel so comfortable!', '★★★★★'],
        ['Ravi Kumar', 'Birthday Event', 'Booked online in 3 minutes, photographer was on time and the candid shots were gem-level quality. Will definitely hire again for our next event!', '★★★★★'],
        ['Anjali Mehta', 'Corporate Event', 'Used them for our annual conference. Super professional, fast turnaround, and the headshots were top-notch. All 80 employees were happy!', '★★★★★'],
        ['Dev & Sneha', 'Pre-Wedding Shoot', 'Our pre-wedding photos looked like a Bollywood movie. The locations suggested were perfect and the editing style was exactly what we wanted.', '★★★★★'],
        ['Meera Nair', 'Baby Shower', 'They captured the most precious moments of my baby shower. Every tiny detail was noticed. The album is my most treasured possession now.', '★★★★☆'],
        ['Karthik Iyer', 'Product Photography', 'Sales increased 40% after switching to PixelMoment product shots. ROI was incredible. Fast, affordable, and stunning results.', '★★★★★'],
    ] as [$name, $type, $review, $stars])
                <div
                    class="group flex flex-col gap-4 rounded-3xl border border-white/5 bg-zinc-900/40 p-6 backdrop-blur-sm transition-all duration-300 hover:border-lime-400/30 hover:bg-zinc-900/80 hover:shadow-2xl hover:shadow-lime-400/5">

                    {{-- Stars --}}
                    <div class="flex gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <span
                                class="text-xs {{ $i < mb_strlen(str_replace('☆', '', $stars), 'UTF-8') ? 'text-lime-400' : 'text-zinc-700' }}">✦</span>
                        @endfor
                    </div>

                    <p class="flex-1 text-sm leading-7 text-zinc-300 italic">"{{ $review }}"</p>

                    <div class="flex items-center gap-3 border-t border-white/5 pt-4">
                        {{-- User Avatar Initials --}}
                        <div
                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-zinc-800 to-zinc-950 text-xs font-black text-lime-400 ring-1 ring-white/10 group-hover:ring-lime-400/50 transition-all duration-300">
                            {{ mb_substr($name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">{{ $name }}</p>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-zinc-500">{{ $type }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
