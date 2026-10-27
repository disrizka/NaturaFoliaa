@php
    $links = [
        ['home', 'Home'],
        ['products', 'Products & Specifications'],
        ['cooperation', 'Payment & Cooperation'],
        ['contact', 'Contact'],
    ];
@endphp
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur text-char-900 border-b border-ash-100">
    <div class="mx-auto max-w-6xl px-5 h-20 flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-display text-xl font-extrabold tracking-tight">
            Natura Folia <span class="text-ember-500">Export</span>
        </a>

        <nav class="hidden md:flex items-center gap-7 text-sm font-medium">
            @foreach ($links as [$route, $label])
                <a href="{{ route($route) }}"
                   class="py-1 border-b-2 transition {{ request()->routeIs($route) ? 'border-ember-500 text-char-900' : 'border-transparent text-char-700 hover:text-ember-500' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <details class="md:hidden relative">
            <summary class="list-none cursor-pointer px-3 py-2 rounded border border-ash-300 text-sm">Menu</summary>
            <div class="absolute right-0 mt-2 w-64 rounded-lg bg-white border border-ash-100 shadow-xl p-2">
                @foreach ($links as [$route, $label])
                    <a href="{{ route($route) }}"
                       class="block px-3 py-2 rounded text-sm {{ request()->routeIs($route) ? 'bg-ash-100 text-char-900' : 'text-char-700' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </details>
    </div>
</header>