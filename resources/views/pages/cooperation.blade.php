@extends('layouts.app')
@section('title', 'Payment & Cooperation')

@section('content')
@php $c = config('company'); @endphp

<section class="bg-ash-100 text-char-900">
    <div class="mx-auto max-w-6xl px-5 py-16">
        <p class="eyebrow">Payment & Cooperation</p>
        <h1 class="mt-2 font-display text-4xl md:text-5xl">Flexible Trade Solutions. Clear Business Terms.</h1>
        <p class="mt-5 max-w-3xl text-char-700 leading-relaxed">
            At Natura Folia Export, we aim to build transparent and reliable business relationships with international buyers and Indonesian manufacturers. Payment arrangements and cooperation structures are discussed and agreed upon based on the product, order volume, transaction requirements, and the needs of both parties.
        </p>
    </div>
</section>

{{-- Payment --}}
<section class="mx-auto max-w-6xl px-5 py-16">
    <h2 class="font-display text-3xl">Payment Options</h2>
    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($c['payment_options'] as $o)
            <div class="bg-white rounded-xl border border-ash-100 p-6 shadow-sm">
                <h3 class="font-semibold">{{ $o['title'] }}</h3>
                <p class="mt-3 text-sm text-char-700/80 leading-relaxed">{{ $o['text'] }}</p>
            </div>
        @endforeach
    </div>
    <p class="mt-6 text-sm italic text-char-700/70">
        All payment methods are subject to transaction-specific agreement. Availability depends on the parties involved, banking requirements, and contract terms.
    </p>
</section>

{{-- Models --}}
<section class="bg-ash-100">
    <div class="mx-auto max-w-6xl px-5 py-16">
        <h2 class="font-display text-3xl">Cooperation Models</h2>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            @foreach ($c['models'] as $i => $m)
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <span class="font-display text-4xl text-ember-500">{{ $i + 1 }}</span>
                    <h3 class="mt-2 font-semibold">{{ $m['title'] }}</h3>
                    <p class="mt-3 text-sm text-char-700/80 leading-relaxed">{{ $m['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Process --}}
<section class="mx-auto max-w-4xl px-5 py-16">
    <h2 class="font-display text-3xl">Our Cooperation Process</h2>
    <ol class="mt-8 space-y-6">
        @foreach ($c['process'] as $i => [$title, $text])
            <li class="flex gap-5">
                <span class="shrink-0 w-10 h-10 rounded-full bg-char-900 text-ember-400 grid place-items-center font-display">{{ $i + 1 }}</span>
                <div>
                    <h3 class="font-semibold">{{ $title }}</h3>
                    <p class="text-sm text-char-700/80 mt-1">{{ $text }}</p>
                </div>
            </li>
        @endforeach
    </ol>
</section>

<section class="bg-char-900 text-ash-50">
    <div class="mx-auto max-w-4xl px-5 py-14 text-center">
        <h2 class="font-display text-3xl">Let's Discuss Your Requirements</h2>
        <p class="mt-4 text-ash-300">Contact us to discuss your product requirements and cooperation opportunities.</p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block rounded-full bg-white text-char-900 px-8 py-4 text-xs font-bold uppercase tracking-[0.15em] hover:bg-ash-100 transition">Contact Us</a>
    </div>
</section>
@endsection
