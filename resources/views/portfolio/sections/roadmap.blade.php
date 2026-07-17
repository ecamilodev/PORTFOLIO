{{-- Roadmap Section --}}
<section id="roadmap" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-cyan glow-cyan tracking-wider uppercase">Roadmap</h2>
        </div>

        @php
            $roadmap = [
                ['year' => '2020', 'text' => 'Inicié mi formación como Ingeniero de Sistemas.'],
                ['year' => '2022', 'text' => 'Primeros proyectos web y bases del desarrollo.'],
                ['year' => '2024', 'text' => 'Desarrollo Backend profesional con Laravel.'],
                ['year' => '2025', 'text' => 'Software Engineer en Steps Consulting Corp.'],
                ['year' => '2026', 'text' => 'Arquitectura de Software, DevOps y proyectos freelance.'],
                ['year' => 'NEXT', 'text' => 'Cloud Computing & Microservices.', 'next' => true],
            ];
        @endphp

        <div id="roadmap-container" class="relative max-w-2xl">
            <div class="roadmap-line absolute left-[3px] top-1 bottom-1 w-0.5 bg-cyan/30"></div>

            <div class="space-y-8">
                @foreach($roadmap as $index => $item)
                    <div class="relative pl-8 fade-up opacity-0 translate-y-4 transition-all duration-700"
                         style="transition-delay: {{ $index * 200 }}ms">
                        <span class="roadmap-dot absolute left-0 top-1 {{ !empty($item['next']) ? 'roadmap-dot-next' : '' }}"
                              style="transition-delay: {{ $index * 200 }}ms"></span>
                        <span class="font-display font-bold text-lg {{ !empty($item['next']) ? 'text-magenta glow-magenta' : 'text-cyan' }}">
                            {{ $item['year'] }}
                        </span>
                        <p class="text-sm mt-1 {{ !empty($item['next']) ? 'text-magenta' : 'text-text' }}">
                            {{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
