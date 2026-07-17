{{-- Skills Section --}}
<section id="habilidades" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-cyan glow-cyan tracking-wider uppercase">Tecnologías</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $categoryLabels = [
                    'backend'  => ['Backend', 'text-cyan', 'border-cyan/30'],
                    'frontend' => ['Frontend', 'text-magenta', 'border-magenta/30'],
                    'mobile'   => ['Mobile', 'text-neon-green', 'border-neon-green/30'],
                    'devops'   => ['DevOps', 'text-neon-yellow', 'border-neon-yellow/30'],
                    'security' => ['Seguridad', 'text-magenta', 'border-magenta/30'],
                ];
            @endphp

            @foreach($skills as $category => $items)
                @php
                    $label = $categoryLabels[$category] ?? [$category, 'text-cyan', 'border-cyan/30'];
                @endphp
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700">
                    <h3 class="font-display font-bold text-sm {{ $label[1] }} tracking-wider uppercase mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full {{ str_replace('text-', 'bg-', $label[1]) }}"></span>
                        {{ $label[0] }}
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($items as $skill)
                            <span class="tech-badge border {{ $label[2] }}">
                                {{ $skill['name'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
