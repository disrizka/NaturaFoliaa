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
@endsection
