{{-- Experience Section --}}
<section id="experiencia" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-neon-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-neon-green glow-green tracking-wider uppercase">Experiencia</h2>
        </div>

        <div class="space-y-8">
            @foreach($experience as $index => $job)
                <div class="timeline-item pb-8 fade-up opacity-0 translate-y-4 transition-all duration-700"
                     style="transition-delay: {{ $index * 150 }}ms">

                    <div class="panel p-6">
                        {{-- Header --}}
                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2 mb-4">
                            <div>
                                <h3 class="font-display font-bold text-lg text-white">{{ $job['role'] }}</h3>
                                <p class="font-mono text-sm text-cyan">{{ $job['company'] }}</p>
                            </div>
                            <div class="text-right">
                                <div class="flex items-center gap-2 justify-end">
                                    @if($job['current'])
                                        <span class="w-2 h-2 rounded-full bg-neon-green pulse-green"></span>
                                        <span class="font-mono text-xs text-neon-green">Actual</span>
                                    @endif
                                </div>
                                <p class="font-mono text-xs text-text-muted mt-1">{{ $job['period'] }}</p>
                                <p class="font-mono text-xs text-text-muted">{{ $job['location'] }}</p>
                            </div>
                        </div>

                        {{-- Tasks --}}
                        <ul class="space-y-2">
                            @foreach($job['tasks'] as $task)
                                <li class="flex items-start gap-3 text-sm text-text">
                                    <span class="text-cyan mt-1 shrink-0">▸</span>
                                    <span>{{ $task }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Education --}}
        <div class="mt-12 panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700">
            <h3 class="font-display font-bold text-sm text-cyan tracking-wider uppercase mb-4 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                </svg>
                Formación & Certificaciones
            </h3>
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="p-4 rounded bg-void/50 border border-border">
                    <p class="font-medium text-white text-sm">Ingeniería de Sistemas</p>
                    <p class="font-mono text-xs text-text-muted mt-1">Fundación Universitaria Los Libertadores — 2025</p>
                </div>
                <div class="p-4 rounded bg-void/50 border border-border">
                    <p class="font-medium text-white text-sm">ISO 27001:2022 & ISO 19011:2018</p>
                    <p class="font-mono text-xs text-text-muted mt-1">Grupo Élite Organizacional</p>
                </div>
            </div>
        </div>
    </div>
</section>
