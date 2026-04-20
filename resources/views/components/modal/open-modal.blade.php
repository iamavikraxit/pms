{{-- Reusable Modal Component --}}
@props([
    'id' => 'modal',
    'title' => null,
    'size' => 'md',
    'closeButton' => true,
    'bgClass' => 'bg-zinc-900',
])

@php
    $sizeClasses = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ];
    $modalSize = $sizeClasses[$size] ?? 'max-w-md';
@endphp

<!-- Modal Backdrop -->
<div id="{{ $id }}-backdrop"
    class="fixed inset-0 z-40 hidden bg-black/60 backdrop-blur-sm transition-opacity duration-300"
    onclick="closeModal('{{ $id }}')">
</div>

<!-- Modal Container -->
<div id="{{ $id }}"
    class="fixed left-1/2 top-1/2 z-50 hidden w-[90vw] -translate-x-1/2 -translate-y-1/2 transform rounded-2xl {{ $bgClass }} shadow-2xl transition-all duration-300 ring-1 ring-white/10 {{ $modalSize }}">

    {{-- Header --}}
    @if ($title || $slot->isEmpty() === false)
        <div class="flex items-center justify-between border-b border-white/10 px-6 py-5">
            <h2 class="text-xl font-bold text-white">{{ $title }}</h2>

            @if ($closeButton)
                <button type="button" onclick="closeModal('{{ $id }}')"
                    class="text-zinc-400 transition-colors duration-200 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            @endif
        </div>
    @endif

    {{-- Body --}}
    <div class="px-6 py-6">
        {{ $slot }}
    </div>

    {{-- Footer (optional) --}}
    @isset($footer)
        <div class="flex gap-3 px-6 py-5">
            {{ $footer }}
        </div>
    @endisset

</div>

<!-- Modal Scripts -->
@once
    @push('scripts')
        <script>
            function openModal(modalId) {
                const modal = document.getElementById(modalId);
                const backdrop = document.getElementById(modalId + '-backdrop');

                if (modal && backdrop) {
                    backdrop.classList.remove('hidden');
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';

                    // Trigger animation
                    setTimeout(() => {
                        backdrop.classList.add('opacity-100');
                        modal.classList.add('scale-100');
                    }, 10);
                }
            }

            function closeModal(modalId) {
                const modal = document.getElementById(modalId);
                const backdrop = document.getElementById(modalId + '-backdrop');

                if (modal && backdrop) {
                    backdrop.classList.add('hidden');
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            // Close modal on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    const openModals = document.querySelectorAll('[id$="-backdrop"]:not(.hidden)');
                    openModals.forEach(backdrop => {
                        const modalId = backdrop.id.replace('-backdrop', '');
                        closeModal(modalId);
                    });
                }
            });
        </script>
    @endpush
@endonce
