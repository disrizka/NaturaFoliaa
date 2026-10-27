@php $c = config('company'); @endphp
<footer class="bg-white text-char-700">
    {{-- Wave: nyambung dari section CTA hijau ke footer putih --}}
    <div class="bg-char-900 leading-[0]" aria-hidden="true">
        <svg viewBox="0 0 1440 110" preserveAspectRatio="none" class="block h-14 w-full md:h-24">
            <path fill="#ffffff" d="M0,60 C240,105 480,105 720,68 C960,30 1200,22 1440,62 L1440,110 L0,110 Z" />
        </svg>
    </div>

    <div class="mx-auto max-w-6xl px-5 pb-12 pt-6 grid gap-12 md:grid-cols-12">
        {{-- Brand --}}
        <div class="md:col-span-5">
            <a href="{{ url('/') }}" class="font-display text-2xl font-extrabold tracking-tight text-char-900">
                Natura Folia <span class="text-ember-500">Export</span>
            </a>
            <p class="mt-4 max-w-sm text-sm leading-relaxed">
                An Indonesian trading and export business committed to transparent, professional, and reliable business practices.
            </p>

            <div class="mt-6 flex items-center gap-3">
                <a href="https://wa.me/{{ $c['whatsapp'] }}" target="_blank" rel="noopener" aria-label="WhatsApp"
                   class="flex h-10 w-10 items-center justify-center rounded-full bg-ash-100 text-char-900 transition hover:bg-ember-500 hover:text-white">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2a9.9 9.9 0 0 0-8.46 15.04L2 22l5.1-1.55A9.94 9.94 0 1 0 12.04 2Zm0 18.1a8.1 8.1 0 0 1-4.13-1.13l-.3-.18-3.03.92.99-2.95-.2-.31A8.1 8.1 0 1 1 12.04 20.1Zm4.44-6.07c-.24-.12-1.44-.71-1.66-.79-.22-.08-.38-.12-.54.12-.16.24-.62.79-.76.95-.14.16-.28.18-.52.06a6.6 6.6 0 0 1-1.94-1.2 7.3 7.3 0 0 1-1.35-1.68c-.14-.24-.02-.37.1-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.19-.46-.39-.4-.54-.4h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.7 2.6 4.12 3.64.58.25 1.03.4 1.38.51.58.18 1.1.16 1.52.1.46-.07 1.44-.59 1.64-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28Z"/></svg>
                </a>
                <a href="mailto:{{ $c['email'] }}" aria-label="Email"
                   class="flex h-10 w-10 items-center justify-center rounded-full bg-ash-100 text-char-900 transition hover:bg-ember-500 hover:text-white">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                </a>
            </div>
        </div>

        {{-- Office --}}
        <div class="md:col-span-3">
            <h3 class="text-xs font-bold uppercase tracking-[0.25em] text-ember-500">Our Office</h3>
            <ul class="mt-5 space-y-3 text-sm leading-relaxed">
                <li>{{ $c['office'] }}</li>
                <li>
                    <span class="text-char-900 font-semibold">Phone &amp; WA:</span>
                    <a class="transition hover:text-ember-500" href="https://wa.me/{{ $c['whatsapp'] }}">{{ $c['phone'] }}</a>
                </li>
                <li>
                    <span class="text-char-900 font-semibold">Email:</span>
                    <a class="break-all transition hover:text-ember-500" href="mailto:{{ $c['email'] }}">{{ $c['email'] }}</a>
                </li>
            </ul>
        </div>

        {{-- Registration --}}
        <div class="md:col-span-4">
            <h3 class="text-xs font-bold uppercase tracking-[0.25em] text-ember-500">Business Registration</h3>
            <div class="mt-5 rounded-2xl bg-ash-100/70 p-5">
                <ul class="space-y-4 text-sm leading-relaxed">
                    @foreach ($c['registration'] as $label => $value)
                        <li>
                            <span class="block text-[11px] font-bold uppercase tracking-wider text-char-900">{{ $label }}</span>
                            <span class="break-words">{{ $value }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="border-t border-char-900/10">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-2 px-5 py-6 text-xs md:flex-row">
            <p>&copy; {{ date('Y') }} {{ $c['name'] }}. All rights reserved.</p>
            <p class="text-char-700/70">Indonesian Export &middot; Transparent &middot; Reliable</p>
        </div>
    </div>
</footer>