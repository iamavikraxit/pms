@props([
    'header' => null,
    'footer' => null,
    'pagination' => null,
])

<div {{ $attributes->merge(['class' => 'w-full bg-white/70 backdrop-blur-xl border border-orange-100 rounded-xl overflow-hidden shadow-xl shadow-orange-950/5 transition-all duration-300']) }}>
    {{-- Header section for Actions, Title, etc. --}}
    @if ($header)
        <div class="px-6 py-5 border-b border-orange-50 bg-gradient-to-r from-orange-50/20 via-white to-orange-50/10">
            {{ $header }}
        </div>
    @endif

    {{-- Table scrollable wrapper --}}
    <div class="w-full overflow-x-auto custom-scrollbar">
        <table class="w-full border-collapse text-left align-middle">
            @if ($slot->isNotEmpty())
                {{ $slot }}
            @else
                {{-- Fallback: Automatic Property-driven Table Grid --}}
                @if (!empty($headers))
                    <thead class="bg-gradient-to-b from-orange-50/40 to-orange-50/10 border-b border-orange-100/60">
                        <tr>
                            @foreach ($headers as $index => $th)
                                @php
                                    $labelText = is_array($th) ? ($th['label'] ?? '') : $th;
                                    $align = is_array($th) ? ($th['align'] ?? 'left') : 'left';
                                    $alignClass = [
                                        'left' => 'text-left',
                                        'center' => 'text-center',
                                        'right' => 'text-right',
                                    ][$align] ?? 'text-left';
                                @endphp
                                <th class="px-6 py-4.5 text-[10px] font-black uppercase tracking-[0.2em] text-stone-500/80 {{ $alignClass }}">
                                    {{ $labelText }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                @endif

                <tbody class="divide-y divide-orange-100/40">
                    @if ($items && count($items) > 0)
                        @foreach ($items as $itemIndex => $item)
                            <tr class="group {{ $hoverable ? 'hover:bg-orange-50/20' : '' }} {{ $striped && $itemIndex % 2 !== 0 ? 'bg-orange-50/5' : '' }} transition-all duration-200">
                                @foreach ($headers as $th)
                                    @php
                                        $field = is_array($th) ? ($th['field'] ?? null) : null;
                                        $align = is_array($th) ? ($th['align'] ?? 'left') : 'left';
                                        $alignClass = [
                                            'left' => 'text-left',
                                            'center' => 'text-center',
                                            'right' => 'text-right',
                                        ][$align] ?? 'text-left';

                                        // Try to get the cell value
                                        $val = '';
                                        if ($field) {
                                            if (is_array($item)) {
                                                $val = $item[$field] ?? '';
                                            } elseif (is_object($item)) {
                                                $val = $item->$field ?? '';
                                            }
                                        }
                                    @endphp
                                    <td class="px-6 py-4 text-sm font-semibold text-stone-600/90 group-hover:text-stone-900 transition-colors duration-200 {{ $alignClass }}">
                                        {{ $val }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="{{ count($headers) ?: 1 }}" class="px-6 py-12 text-center text-sm font-medium text-stone-400">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <svg class="w-8 h-8 text-stone-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <span>{{ $emptyMessage }}</span>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            @endif
        </table>
    </div>

    {{-- Footer / Pagination section --}}
    @if ($pagination || $footer)
        <div class="px-6 py-4 border-t border-orange-50 bg-orange-50/10 flex items-center justify-between">
            @if ($pagination)
                <div class="w-full">
                    {{ $pagination }}
                </div>
            @else
                {{ $footer }}
            @endif
        </div>
    @endif
</div>
