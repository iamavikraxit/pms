{{-- ============================================================
     TRUST / WHY US STRIP
============================================================ --}}
<section class="relative w-full overflow-hidden bg-slate-50 border-t border-b border-slate-100 py-14">
    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-6">
            @foreach([
                ['🔒', 'Secure Payment'],
                ['⚡', 'Same-Day Booking'],
                ['🎯', 'Vetted Pros'],
                ['📸', '4K Delivery'],
                ['🔄', 'Easy Rescheduling'],
                ['💯', 'Satisfaction Guarantee'],
            ] as [$icon, $label])
            <div class="flex flex-col items-center gap-2 text-center">
                <span class="text-2xl">{{ $icon }}</span>
                <p class="text-xs font-semibold text-slate-600">{{ $label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
