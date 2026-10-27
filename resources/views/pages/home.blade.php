@extends('layouts.app')
@section('title', 'Home')

@section('content')
{{-- Hero --}}
<section class="hero relative bg-white overflow-hidden">
    <span class="float absolute left-[6%] top-[70%] size-2 rounded-full bg-emerald-400"></span>
    <span class="float absolute left-[11%] top-[88%] size-1.5 rounded-full bg-teal-500" style="animation-delay:-2s"></span>
    <span class="float absolute left-[46%] top-[78%] size-2.5 rounded-full bg-teal-500" style="animation-delay:-4s"></span>
    <div class="mx-auto max-w-6xl px-5 py-14 md:py-20 grid gap-12 md:grid-cols-[1.05fr_1fr] items-center">
        <div>
            <p class="eyebrow hero-rise">Indonesian Export Trading</p>
            <h1 class="hero-rise mt-6 text-4xl md:text-[3.5rem] leading-[1.1] text-char-900" style="--d:.12s">
                Premium charcoal briquettes from Indonesia
            </h1>
            <p class="hero-rise mt-7 max-w-md text-lg leading-relaxed text-char-700" style="--d:.24s">
                Passionate about connecting international buyers with trusted Indonesian manufacturers.
            </p>
            <div class="hero-rise mt-10 flex flex-wrap items-center gap-8" style="--d:.36s">
                <a href="{{ route('contact') }}" class="btn-grad">Get a Quote</a>
                <a href="{{ route('products') }}" class="btn-link">Discover Products</a>
            </div>
        </div>
        <div class="relative float">
            <div class="blob absolute -inset-4 bg-[#dcefe4]"></div>
            <span class="absolute -right-2 top-6 size-2.5 rounded-full bg-emerald-500"></span>
            <span class="absolute -left-6 bottom-16 size-2 rounded-full bg-teal-500"></span>
            <img src="{{ asset('images/shisha-warehouse.png') }}" alt="Charcoal briquettes in warehouse"
                 class="blob relative w-full aspect-square object-cover shadow-xl">
        </div>
    </div>
</section>

{{-- Key figures --}}
<section class="bg-char-900 text-white">
    <div class="mx-auto max-w-6xl px-5 py-14 grid grid-cols-2 md:grid-cols-4 gap-y-10 gap-x-6 text-center">
        @foreach ([
            ['', 7000, 0, ' kcal', 'Caloric value, Shisha Grade'],
            ['', 120, 0, ' min', 'Burning time, Shisha Grade'],
            ['≤ ', 2.5, 1, '%', 'Ash content, Shisha Grade'],
            ['', 5, 0, '%', 'Moisture content, all grades'],
        ] as [$pre, $n, $d, $suf, $label])
            <div>
                <p class="font-display text-3xl md:text-4xl font-extrabold">
                    {{ $pre }}<span data-count="{{ $n }}" data-decimals="{{ $d }}">0</span><span class="text-ember-400">{{ $suf }}</span>
                </p>
                <p class="mt-2 text-xs uppercase tracking-widest text-ash-300">{{ $label }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- Products --}}
<section class="mx-auto max-w-6xl px-5 py-20">
    <div class="flex items-end justify-between gap-4 flex-wrap">
        <div>
            <p class="text-xs uppercase tracking-widest text-ember-600">Our Products</p>
            <h2 class="mt-2 font-display text-3xl md:text-4xl">Two grades, one standard of care.</h2>
        </div>
        <a href="{{ route('products') }}" class="text-sm font-medium underline underline-offset-4 hover:text-ember-600">Full specifications &rarr;</a>
    </div>

    <div class="mt-10 grid gap-6 md:grid-cols-2">
        @foreach ($products as $p)
            <a href="{{ route('products') }}#{{ $p['slug'] }}" class="group block rounded-xl overflow-hidden bg-white border border-ash-100 shadow-sm hover:shadow-md transition">
                <img src="{{ asset($p['images'][0]) }}" alt="{{ $p['name'] }}" class="w-full aspect-[16/10] object-cover group-hover:scale-[1.02] transition duration-500" loading="lazy">
                <div class="p-6">
                    <h3 class="font-display text-2xl">{{ $p['name'] }}</h3>
                    <p class="mt-2 text-sm text-char-700/80">{{ $p['tagline'] }}</p>
                    <p class="mt-4 text-xs text-char-700">
                        <span class="text-char-700">Ash {{ $p['specs']['Ash Content'] }}</span> &middot;
                        <span class="text-char-700">{{ $p['specs']['Caloric Value'] }}</span>
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</section>

{{-- Trust --}}
<section class="bg-ash-100">
    <div class="mx-auto max-w-6xl px-5 py-16 grid gap-8 md:grid-cols-3">
        @foreach ([
            ['Transparent Terms', 'Specifications, pricing, delivery, and payment are confirmed before any order is finalized.'],
            ['Verified Suppliers', 'We assess product availability and supplier capability before quotation.'],
            ['End-to-End Coordination', 'From sampling to shipment documentation, handled according to the agreed contract.'],
        ] as [$t, $d])
            <div>
                <h3 class="font-display text-xl">{{ $t }}</h3>
                <p class="mt-2 text-sm text-char-700/80 leading-relaxed">{{ $d }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- CTA --}}
<section class="bg-char-900 text-ash-50">
    <div class="mx-auto max-w-4xl px-5 py-16 text-center">
        <h2 class="font-display text-3xl">Let's Discuss Your Requirements</h2>
        <p class="mt-4 text-ash-300">Whether you are an international buyer seeking Indonesian products or a manufacturer exploring export opportunities, we welcome your inquiry.</p>
        <a href="{{ route('cooperation') }}" class="mt-8 inline-block rounded-full bg-white text-char-900 px-8 py-4 text-xs font-bold uppercase tracking-[0.15em] hover:bg-ash-100 transition">Payment & Cooperation</a>
    </div>
</section>
@endsection