@extends('layouts.app')
@section('title', 'Products & Specifications')

@section('content')
<section class="bg-ash-100">
    <div class="mx-auto max-w-6xl px-5 py-16 md:py-20 flex flex-wrap items-end justify-between gap-8">
        <div>
            <p class="eyebrow">Products</p>
            <h1 class="mt-4 text-4xl md:text-5xl text-char-900">Products &amp; Specifications</h1>
        </div>
        <nav class="flex gap-8 text-xs font-bold uppercase tracking-[0.18em]">
            @foreach ($products as $i => $p)
                <a href="#{{ $p['slug'] }}" class="border-b-2 border-transparent pb-1 text-char-700 hover:border-ember-500 hover:text-ember-500 transition">
                    0{{ $i + 1 }} &nbsp;{{ $p['slug'] === 'shisha' ? 'Shisha Grade' : 'BBQ Grade' }}
                </a>
            @endforeach
        </nav>
    </div>
</section>

<div class="mx-auto max-w-6xl px-5 py-24 space-y-32">
    @foreach ($products as $product)
        @include('partials.product-card', ['product' => $product, 'index' => $loop->index])
    @endforeach
</div>
<section class="bg-char-900 text-ash-50">
    <div class="mx-auto max-w-4xl px-5 py-14 text-center">
        <h2 class="font-display text-3xl">Let's Discuss Your Requirements</h2>
        <p class="mt-4 text-ash-300">Contact us to discuss your product requirements and cooperation opportunities.</p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block rounded-full bg-white text-char-900 px-8 py-4 text-xs font-bold uppercase tracking-[0.15em] hover:bg-ash-100 transition">Contact Us</a>
    </div>
</section>
@endsection