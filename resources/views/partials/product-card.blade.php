@php
    $flip = $index % 2 === 1;
    $key = ['Caloric Value', 'Ash Content'];
    $rest = collect($product['specs'])->except($key);
@endphp
<article id="{{ $product['slug'] }}" class="scroll-mt-28 grid gap-x-20 gap-y-14 lg:grid-cols-12 items-center">

    {{-- Image collage --}}
    <div class="relative pb-12 lg:col-span-7 {{ $flip ? 'lg:order-2' : '' }}">
        <img src="{{ asset($product['images'][1]) }}" alt="{{ $product['name'] }} in warehouse"
             class="w-full aspect-[4/3] object-cover rounded-sm" loading="lazy">
        <span class="absolute top-4 left-4 bg-white px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-char-900">Warehouse stock</span>

        <img src="{{ asset($product['images'][0]) }}" alt="{{ $product['name'] }} close-up"
             class="absolute bottom-0 w-[52%] aspect-[4/3] object-cover rounded-sm border-[7px] border-white shadow-2xl {{ $flip ? 'left-5 lg:-left-12' : 'right-5 lg:-right-12' }}" loading="lazy">
    </div>

    {{-- Text --}}
    <div class="relative lg:col-span-5 {{ $flip ? 'lg:order-1' : '' }}">
        <span class="pointer-events-none absolute -top-14 -left-2 select-none font-display text-[7rem] font-extrabold leading-none text-ash-100">0{{ $index + 1 }}</span>

        <div class="relative">
            <p class="eyebrow">{{ $product['slug'] === 'shisha' ? 'Shisha Grade' : 'BBQ Grade' }}</p>
            <h2 class="mt-4 text-3xl md:text-4xl leading-tight text-char-900">{{ $product['name'] }}</h2>
            <p class="mt-3 text-char-700">{{ $product['tagline'] }}</p>

            <div class="mt-8 grid grid-cols-2 gap-6 border-y border-ash-300 py-6">
                @foreach ($key as $k)
                    <div>
                        <p class="text-2xl font-extrabold text-ember-500">{{ $product['specs'][$k] }}</p>
                        <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.2em] text-char-700">{{ $k }}</p>
                    </div>
                @endforeach
            </div>

            <dl class="mt-2">
                @foreach ($rest as $label => $value)
                    <div class="flex justify-between gap-4 border-b border-dashed border-ash-300 py-3 text-sm">
                        <dt class="text-char-700">{{ $label }}</dt>
                        <dd class="font-semibold text-char-900 text-right">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>

            <a href="{{ route('contact') }}"
               class="mt-8 inline-flex items-center gap-3 border-b-2 border-char-900 pb-1 text-xs font-bold uppercase tracking-[0.18em] text-char-900 transition hover:gap-5 hover:border-ember-500 hover:text-ember-500">
                Request a Quotation <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </div>
</article>