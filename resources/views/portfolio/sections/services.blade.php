{{-- Services Section --}}
<section id="servicios" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-cyan glow-cyan tracking-wider uppercase">¿Qué puedo hacer?</h2>
        </div>

        @php
            $iconPaths = [
                'backend'      => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2M7 8h.01M7 16h.01',
                'architecture' => 'M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9',
                'web'          => 'M3 12h18M12 3a15.3 15.3 0 010 18M12 3a15.3 15.3 0 000 18M3 12a9 9 0 1118 0 9 9 0 01-18 0z',
                'devops'       => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 7h10v10H7V7z',
                'consulting'   => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($services as $index => $service)
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700"
                     style="transition-delay: {{ $index * 150 }}ms">
                    <div class="service-icon w-10 h-10 shrink-0 rounded border border-cyan/30 bg-cyan/5 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconPaths[$service['icon']] ?? '' }}"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-lg text-cyan">{{ $service['title'] }}</h3>
                    <p class="text-text text-sm leading-relaxed mt-2">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
