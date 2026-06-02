
<div class="relative max-w-md" data-search-field data-debounce="{{ (int) $debounceMs }}">
    <form id="{{ $formId }}" method="{{ $method }}" action="{{ $action }}">
        <div class="relative w-full">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <input id="{{ $inputId }}" data-search-input type="search" name="{{ $name }}"
                value="{{ $value }}" placeholder="{{ $placeholder }}" autocomplete="off"
                aria-label="{{ $placeholder }}"
                class="w-72 rounded-xl border border-orange-200 bg-white/80 py-3 pl-12 {{ $inputPaddingClass }} text-sm font-medium text-stone-700 shadow-sm outline-none placeholder:text-stone-400 focus:border-orange-400 focus:ring-4 focus:ring-orange-100">

            @if ($withButton)
                <button type="submit"
                    class="absolute inset-y-0 right-2 my-2 rounded-xl px-4 text-sm font-semibold {{ $buttonClasses }}">
                    {{ $buttonLabel }}
                </button>
            @endif
        </div>
    </form>
</div>

@once
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('[data-search-field]').forEach(function(container) {
                    const form = container.querySelector('form');
                    const input = container.querySelector('[data-search-input]');
                    const debounceMsValue = container.dataset.debounce;
                    const debounceMs = debounceMsValue ? parseInt(debounceMsValue, 10) : 0;
                    let submitTimeout = null;

                    if (!form || !input) {
                        return;
                    }

                    if (debounceMs > 0) {
                        input.addEventListener('input', function() {
                            clearTimeout(submitTimeout);
                            submitTimeout = setTimeout(function() {
                                if (typeof form.requestSubmit === 'function') {
                                    form.requestSubmit();
                                } else {
                                    form.submit();
                                }
                            }, debounceMs);
                        });
                    }

                    input.addEventListener('keydown', function(event) {
                        if (event.key === 'Enter') {
                            clearTimeout(submitTimeout);
                            if (typeof form.requestSubmit === 'function') {
                                form.requestSubmit();
                            } else {
                                form.submit();
                            }
                        }
                    });

                    if (input.value && input.value.length > 0) {
                        input.focus();
                        input.setSelectionRange(input.value.length, input.value.length);
                    }
                });
            });
        </script>
    @endpush
@endonce
