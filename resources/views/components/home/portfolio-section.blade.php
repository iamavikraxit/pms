{{-- ============================================================
     PORTFOLIO PREVIEW
============================================================ --}}
<section id="portfolio" class="relative w-full overflow-hidden bg-slate-50 py-20 lg:py-28">

    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Section header --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <span class="inline-flex items-center rounded-full bg-violet-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-violet-500">Portfolio</span>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">Our Recent Work</h2>
            </div>
            <a href="#" class="shrink-0 text-sm font-semibold text-rose-500 transition hover:text-rose-600">View Full Portfolio →</a>
        </div>

        {{-- Masonry-like grid --}}
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            @foreach([
                    ['Wedding in Mumbai', 'Priya & Arjun', 'https://www.focuzstudios.in/wp-content/uploads/2025/04/Fun-Filled-Talambralu-in-Telugu-wedding-011_result.webp', 'tall'],
                    ['Birthday Celebration', 'Ravi Kumar', 'https://rjpartyplanner.com/wp-content/uploads/2023/04/1stbirthday_delhiphotographer_Shambhavi_013.jpg', 'normal'],
                    ['Corporate Event', 'TechCorp India', 'https://www.cloudbooth.com.sg/wp-content/uploads/2022/12/what-makes-event-photography-essential-for-corporate-events.jpg', 'normal'],
                    ['Pre-Wedding Shoot', 'Sneha & Dev', 'https://onehorizonproductions.com/wp-content/uploads/2023/05/OHP-03325-scaled.webp', 'normal'],
                    ['Baby Shower', 'Meera Family', 'https://phometo.com/images/gallery/Baby-Shower-photography.jpg', 'normal'],
                    ['Product Photography', 'OrganicKart', 'https://blog.jpegmini.com/wp-content/uploads/2018/08/Bottle-Advertising-photography.jpg', 'tall'],
                ] as $i => [$title, $client, $image, $size])

                <div class="group relative overflow-hidden rounded-3xl {{ $size === 'tall' ? 'sm:row-span-2' : '' }} cursor-pointer">

                    <div class="relative w-full {{ $size === 'tall' ? 'h-[300px] sm:h-full min-h-[320px]' : 'h-[220px]' }} overflow-hidden">

                        <img
                            src="{{ $image }}?auto=format&fit=crop&w=800&q=80"
                            alt="{{ $title }}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        >

                        {{-- Photo number --}}
                        <div class="absolute top-4 left-4 rounded-lg bg-black/30 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur">
                            {{ sprintf('%02d', $i + 1) }}
                        </div>
                    </div>

                    {{-- Hover overlay --}}
                    <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/70 via-transparent to-transparent p-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <p class="text-sm font-bold text-white">{{ $title }}</p>
                        <p class="text-xs text-white/70">{{ $client }}</p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
