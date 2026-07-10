@props([
    'headers' => [],
    'items' => null,
    'emptyTitle' => 'No records found',
    'emptyDescription' => 'There are no items matching your criteria.',
    'searchAction' => null,
    'searchPlaceholder' => 'Search...',
    'searchValue' => '',
    'searchName' => 'search',
    'totalCount' => null
])

@php
    $resolvedTotal = $totalCount;
    if ($resolvedTotal === null && $items !== null) {
        if (is_object($items) && method_exists($items, 'total')) {
            $resolvedTotal = $items->total();
        } elseif (is_object($items) && method_exists($items, 'count')) {
            $resolvedTotal = $items->count();
        } elseif (is_array($items) || $items instanceof \Countable) {
            $resolvedTotal = count($items);
        }
    }
    
    $isEmpty = empty($items) || 
               ($items instanceof \Illuminate\Support\Collection && $items->isEmpty()) ||
               (is_countable($items) && count($items) === 0);
@endphp

<div class="overflow-hidden rounded-2xl border border-orange-100 bg-white shadow-xl shadow-orange-950/5">
    {{-- Search Field & Header Info --}}
    @if($searchAction || isset($headerLeft) || isset($headerRight) || $resolvedTotal !== null)
        <div class="border-b border-orange-100 bg-gradient-to-r from-orange-50/60 via-white to-orange-50/30 px-6 py-5">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    @if($searchAction)
                        <div class="relative">
                            <x-search-field 
                                :action="$searchAction" 
                                :name="$searchName" 
                                :value="$searchValue" 
                                :placeholder="$searchPlaceholder" 
                            />
                        </div>
                    @endif

                    @if(isset($headerLeft))
                        {{ $headerLeft }}
                    @endif

                    @if($resolvedTotal !== null)
                        <span class="whitespace-nowrap rounded-full bg-orange-100 px-3 py-2 text-sm font-semibold text-orange-700">
                            Total: {{ $resolvedTotal }}
                        </span>
                    @endif
                </div>

                @if(isset($headerRight))
                    <div class="flex items-center gap-3">
                        {{ $headerRight }}
                    </div>
                @endif
            </div>
        </div>
    @endif

    {{-- Table Wrapper --}}
    <div class="overflow-x-auto">
        <table class="min-w-[720px] w-full table-auto divide-y divide-orange-100">
            {{-- Table Head --}}
            <thead class="bg-gradient-to-r from-orange-50 via-white to-orange-50">
                <tr>
                    @foreach($headers as $header)
                        @php
                            $label = is_array($header) ? ($header['label'] ?? '') : $header;
                            $align = is_array($header) ? ($header['align'] ?? 'left') : 'left';
                            $class = is_array($header) ? ($header['class'] ?? '') : '';
                            
                            $alignClass = match ($align) {
                                'center' => 'text-center',
                                'right' => 'text-right',
                                default => 'text-left',
                            };
                        @endphp
                        <th class="px-6 py-4 {{ $alignClass }} text-[11px] font-black uppercase tracking-[0.2em] text-stone-500 {{ $class }}">
                            {{ $label }}
                        </th>
                    @endforeach
                </tr>
            </thead>

            {{-- Table Body --}}
            <tbody class="divide-y divide-orange-100/70">
                @if(!$isEmpty)
                    {{ $slot }}
                @else
                    <tr>
                        <td colspan="{{ count($headers) }}" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-orange-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293L6.586 13H4" />
                                    </svg>
                                </div>

                                <div class="space-y-1">
                                    <h3 class="text-lg font-bold text-stone-700">
                                        {{ $emptyTitle }}
                                    </h3>
                                    @if($emptyDescription)
                                        <p class="text-sm text-stone-500">
                                            {{ $emptyDescription }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
