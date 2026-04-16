{{-- ============================================================
     TESTIMONIALS
============================================================ --}}
<section id="testimonials" class="relative w-full overflow-hidden bg-white py-20 lg:py-28">

    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -top-20 left-1/2 h-[400px] w-[600px] -translate-x-1/2 rounded-full bg-rose-100/60 blur-[100px]"></div>
    </div>

    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        <div class="text-center">
            <span class="inline-flex items-center rounded-full bg-yellow-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-yellow-600">Testimonials</span>
            <h2 class="mx-auto mt-4 max-w-2xl text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Loved by 500+ Clients
            </h2>
            <div class="mt-3 flex items-center justify-center gap-1 text-yellow-400">
                @for($s = 0; $s < 5; $s++)
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                @endfor
                <span class="ml-2 text-sm font-semibold text-slate-900">4.9 / 5 · 500+ Reviews</span>
            </div>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach([
                ['Priya Sharma', 'Wedding Client', 'Our wedding photos were absolutely breathtaking. PixelMoment exceeded every expectation. The team was professional, creative, and made us feel so comfortable!', '★★★★★'],
                ['Ravi Kumar', 'Birthday Event', 'Booked online in 3 minutes, photographer was on time and the candid shots were gem-level quality. Will definitely hire again for our next event!', '★★★★★'],
                ['Anjali Mehta', 'Corporate Event', 'Used them for our annual conference. Super professional, fast turnaround, and the headshots were top-notch. All 80 employees were happy!', '★★★★★'],
                ['Dev & Sneha', 'Pre-Wedding Shoot', 'Our pre-wedding photos looked like a Bollywood movie. The locations suggested were perfect and the editing style was exactly what we wanted.', '★★★★★'],
                ['Meera Nair', 'Baby Shower', 'They captured the most precious moments of my baby shower. Every tiny detail was noticed. The album is my most treasured possession now.', '★★★★☆'],
                ['Karthik Iyer', 'Product Photography', 'Sales increased 40% after switching to PixelMoment product shots. ROI was incredible. Fast, affordable, and stunning results.', '★★★★★'],
            ] as [$name, $type, $review, $stars])
            <div class="group flex flex-col gap-4 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-100">
                {{-- Stars --}}
                <p class="text-sm text-yellow-400">{{ $stars }}</p>
                <p class="flex-1 text-sm leading-7 text-slate-600">"{{ $review }}"</p>
                <div class="flex items-center gap-3 border-t border-slate-50 pt-4">
                    <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-rose-400 to-rose-600 text-sm font-black text-white shadow">
                        {{ mb_substr($name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-900">{{ $name }}</p>
                        <p class="text-xs text-slate-400">{{ $type }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
