@extends('layouts.app')
@section('title', 'Contact')

@section('content')
@php $c = config('company'); @endphp

<section class="bg-ash-100 text-char-900">
    <div class="mx-auto max-w-6xl px-5 py-16">
        <p class="eyebrow">Contact</p>
        <h1 class="mt-2 font-display text-4xl md:text-5xl">Get in Touch</h1>
        <p class="mt-5 max-w-2xl text-char-700">For business verification and partnership inquiries, please contact us.</p>
    </div>
</section>

<div class="mx-auto max-w-6xl px-5 py-16 grid gap-8 md:grid-cols-2">
    <div class="bg-white rounded-xl border border-ash-100 shadow-sm p-7">
        <h2 class="font-display text-2xl">Our Office</h2>
        <dl class="mt-6 space-y-5 text-sm">
            <div>
                <dt class="text-xs uppercase tracking-widest text-ember-600">Address</dt>
                <dd class="mt-1">{{ $c['office'] }}</dd>
            </div>
            <div>
                <dt class="text-xs uppercase tracking-widest text-ember-600">Phone & WhatsApp</dt>
                <dd class="mt-1"><a class="hover:text-ember-600" href="https://wa.me/{{ $c['whatsapp'] }}">{{ $c['phone'] }}</a></dd>
            </div>
            <div>
                <dt class="text-xs uppercase tracking-widest text-ember-600">Email</dt>
                <dd class="mt-1"><a class="hover:text-ember-600 break-all" href="mailto:{{ $c['email'] }}">{{ $c['email'] }}</a></dd>
            </div>
        </dl>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="https://wa.me/{{ $c['whatsapp'] }}" class="rounded-full bg-char-900 text-ash-50 px-6 py-3 text-sm font-medium hover:bg-ember-600 transition">Chat on WhatsApp</a>
            <a href="mailto:{{ $c['email'] }}" class="rounded-full border border-char-900 px-6 py-3 text-sm font-medium hover:bg-char-900 hover:text-ash-50 transition">Send Email</a>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-ash-100 shadow-sm p-7">
        <h2 class="font-display text-2xl">Business Registration & Transparency</h2>
        <p class="mt-4 text-sm text-char-700/80 leading-relaxed">
            Natura Folia Export is an Indonesian trading and export business committed to transparent, professional, and reliable business practices. Our company maintains the necessary business registration documentation in accordance with applicable Indonesian regulations. Relevant documents are available for verification by prospective business partners upon request.
        </p>
        <h3 class="mt-6 text-xs uppercase tracking-widest text-ember-600">Company Registration</h3>
        <dl class="mt-3 divide-y divide-ash-100 text-sm">
            @foreach ($c['registration'] as $label => $value)
                <div class="py-3">
                    <dt class="text-char-700/70">{{ $label }}</dt>
                    <dd class="font-medium mt-0.5">{{ $value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>

{{-- FAQ --}}
@php
    $faqs = [
        ['What products do you offer?', 'We supply two grades of Indonesian charcoal briquettes: Shisha Grade (cubes) and BBQ Charcoal Briquette (hexagonal). Full specifications are listed on the Products & Specifications page.'],
        ['How do I request a quotation?', 'Contact us via WhatsApp or email and share your product requirements, target quantity, destination, and preferred delivery terms. We will review availability, specifications, and pricing before sending a quotation.'],
        ['Which payment methods are available?', 'Telegraphic Transfer (T/T), Letter of Credit (L/C), and customized payment terms for qualified business transactions. All payment methods are subject to transaction-specific agreement.'],
        ['What cooperation models do you offer?', 'Export Trading, Supplier–Buyer Matching, and Sourcing & Export Coordination. Any introduction fee or commission for matching is subject to a separate written agreement.'],
        ['How does an order proceed?', 'Initial inquiry, supplier and product verification, quotation and agreement, order confirmation, then shipment coordination according to the contract.'],
        ['Can I verify your business documents?', 'Yes. Our business registration details are listed on this page, and relevant documents are available for verification by prospective business partners upon request.'],
    ];
@endphp
<section class="bg-ash-100">
    <div class="mx-auto max-w-6xl px-5 py-20 grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <p class="eyebrow">FAQ</p>
            <h2 class="mt-4 text-3xl md:text-4xl text-char-900">Frequently Asked Questions</h2>
            <p class="mt-4 text-char-700 leading-relaxed">Can't find what you're looking for? Reach out and we will gladly help.</p>
        </div>
        <div class="lg:col-span-8">
            @foreach ($faqs as [$q, $a])
                <details class="group border-b border-ash-300 py-5" @if ($loop->first) open @endif>
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 font-bold text-char-900 hover:text-ember-500 transition [&::-webkit-details-marker]:hidden">
                        <span>{{ $q }}</span>
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-white text-ember-500 text-xl leading-none transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 max-w-2xl text-sm leading-relaxed text-char-700">{{ $a }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-char-900 text-ash-50">
    <div class="mx-auto max-w-4xl px-5 py-14 text-center">
        <h2 class="font-display text-3xl">Still Have Questions?</h2>
        <p class="mt-4 text-ash-300">Send us a message and we will get back to you.</p>
        <a href="https://wa.me/{{ $c['whatsapp'] }}" class="mt-8 inline-block rounded-full bg-white text-char-900 px-8 py-4 text-xs font-bold uppercase tracking-[0.15em] hover:bg-ash-100 transition">Chat on WhatsApp</a>
    </div>
</section>
@endsection