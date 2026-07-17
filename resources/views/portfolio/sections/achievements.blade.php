{{-- Achievements Section --}}
<section id="logros" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        @php
            $achievements = [
                ['prefix' => '+', 'target' => 6,   'suffix' => '', 'label' => 'Proyectos Desarrollados'],
                ['prefix' => '+', 'target' => 3,   'suffix' => '', 'label' => 'Certificaciones'],
                ['prefix' => '+', 'target' => 2,   'suffix' => '', 'label' => 'Años de Experiencia'],
                ['prefix' => '',  'target' => 100, 'suffix' => '%', 'label' => 'Commitment'],
                ['prefix' => '',  'target' => 5,   'suffix' => '+', 'label' => 'Tecnologías Principales'],
                ['static' => 'REMOTE', 'label' => 'Worldwide'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6">
            @foreach($achievements as $index => $item)
                <div class="panel p-6 text-center fade-up opacity-0 translate-y-4 transition-all duration-700"
                     style="transition-delay: {{ $index * 100 }}ms">
                    @if(isset($item['static']))
                        <p class="font-display font-bold text-3xl sm:text-4xl text-cyan glow-cyan">{{ $item['static'] }}</p>
                    @else
                        <p class="font-display font-bold text-3xl sm:text-4xl text-cyan glow-cyan achievement-value"
                           data-prefix="{{ $item['prefix'] }}"
                           data-target="{{ $item['target'] }}"
                           data-suffix="{{ $item['suffix'] }}">{{ $item['prefix'] }}{{ $item['target'] }}{{ $item['suffix'] }}</p>
                    @endif
                    <p class="font-mono text-xs text-text-muted mt-2 uppercase tracking-wider">{{ $item['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
