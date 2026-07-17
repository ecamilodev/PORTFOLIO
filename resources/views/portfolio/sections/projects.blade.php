{{-- Projects Section --}}
<section id="proyectos" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-magenta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-magenta glow-magenta tracking-wider uppercase">Proyectos Destacados</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($projects as $index => $project)
                <div class="project-card rounded-lg p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 flex flex-col h-full"
                     style="transition-delay: {{ $index * 120 }}ms">

                    {{-- Header --}}
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">{{ $project['title'] }}</h3>
                            <p class="font-mono text-xs text-cyan mt-1">{{ $project['type'] }}</p>
                        </div>
                        <span class="font-mono text-[0.6rem] text-text-muted border border-border rounded px-2 py-1">
                            {{ $project['role'] }}
                        </span>
                    </div>

                    {{-- Problem / Solution / Result --}}
                    <div class="space-y-3 mb-4">
                        <div>
                            <p class="font-mono text-xs uppercase tracking-wider text-magenta mb-1">Problema:</p>
                            <p class="text-text text-sm leading-relaxed">{{ $project['problem'] }}</p>
                        </div>
                        <div>
                            <p class="font-mono text-xs uppercase tracking-wider text-cyan mb-1">Solución:</p>
                            <p class="text-text text-sm leading-relaxed">{{ $project['solution'] }}</p>
                        </div>
                        <div class="p-3 rounded bg-neon-green/5 border border-neon-green/20">
                            <p class="font-mono text-xs uppercase tracking-wider text-neon-green mb-1">Resultado:</p>
                            <p class="text-text text-sm leading-relaxed">{{ $project['result'] }}</p>
                        </div>
                    </div>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                            <span class="project-tag font-mono text-xs px-2 py-1 rounded bg-cyan/5 text-cyan border border-cyan/20">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    {{-- External link --}}
                    @if(!empty($project['url']))
                        <div class="mt-auto pt-4 flex justify-end">
                            <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                               class="project-link inline-flex items-center gap-1 font-mono text-xs text-cyan">
                                Ver proyecto
                                <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
