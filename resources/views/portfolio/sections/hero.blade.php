{{-- Hero Section --}}
<section id="inicio" class="relative min-h-screen flex items-center scanlines overflow-hidden">
    {{-- Background image --}}
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('{{ asset('images/hero/background.jpg') }}');">
    </div>

    {{-- Dark overlay: heavier on the left (text side), lighter on the right (image stays visible) --}}
    <div class="absolute inset-0 bg-gradient-to-r from-void from-10% via-void/80 via-50% to-void/30"></div>
    <div class="absolute inset-0 bg-void/30"></div>

    {{-- Accent gradients --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(0,240,255,0.08),transparent_60%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,rgba(255,0,128,0.06),transparent_60%)]"></div>

    {{-- Grid lines decoration --}}
    <div class="absolute inset-0 opacity-[0.03]"
         style="background-image: linear-gradient(rgba(0,240,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(0,240,255,0.3) 1px, transparent 1px); background-size: 60px 60px;">
    </div>

    <div class="relative z-10 w-full max-w-5xl mx-auto px-6 lg:px-12 py-20">
        {{-- Top bar --}}
        <div class="flex items-center justify-between mb-12">
            <p class="font-mono text-xs text-text-muted">
                <span class="text-cyan">&gt;</span> Bienvenido a mi portafolio
            </p>
            <div class="flex items-center gap-4 font-mono text-xs text-text-muted">
                <span class="text-neon-green">●</span>
                <span>{{ date('Y') }}</span>
                <span class="text-border">|</span>
                <span>{{ date('H:i') }}</span>
            </div>
        </div>

        {{-- Main content + status card --}}
        <div class="grid lg:grid-cols-[1fr_18rem] gap-10 items-start">
            <div class="space-y-6">
                <p class="font-mono text-sm text-cyan tracking-wider">
                    <span class="text-text-muted">&gt;</span> SOFTWARE ENGINEER
                </p>

                <h2 class="font-display font-bold text-5xl sm:text-6xl lg:text-7xl text-white tracking-tight leading-[1.1]">
                    EDUARD<span class="text-cyan">_</span>SG
                </h2>

                <p id="typing-text"
                   data-text="Backend Developer especializado en Laravel, PHP y arquitectura de aplicaciones web."
                   class="font-mono text-lg text-text-muted cursor-blink max-w-xl min-h-14">
                </p>

                {{-- Tag row --}}
                <div class="flex flex-wrap gap-2">
                    @foreach(['APIs REST', 'Laravel', 'DevOps', 'Linux', 'MySQL', 'CI/CD', 'Seguridad Web'] as $tag)
                        <span class="font-mono text-xs text-cyan border border-cyan/30 rounded px-2.5 py-1">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <p class="font-mono text-sm text-text-muted italic">
                    "Building scalable and secure digital solutions."
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="#proyectos" class="btn-cyber">
                        Ver Proyectos
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#contacto" class="font-mono text-sm text-text-muted hover:text-cyan transition-colors">
                        Contactar →
                    </a>
                </div>
            </div>

            {{-- Status card --}}
            <div class="panel p-6 space-y-4">
                <p class="font-mono text-xs text-text-muted tracking-widest uppercase">Status</p>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-neon-green pulse-green shrink-0"></span>
                    <span class="font-mono text-sm text-neon-green tracking-wide">AVAILABLE FOR WORK</span>
                </div>
                <div class="pt-4 border-t border-border space-y-2">
                    <p class="font-mono text-xs text-text-muted tracking-wider">COLOMBIA (REMOTE)</p>
                    <p class="font-mono text-xs text-text-muted tracking-wider">UTC -5</p>
                </div>
            </div>
        </div>

        {{-- Mini stats --}}
        <div class="mt-16 grid grid-cols-3 gap-4 sm:gap-6 max-w-2xl">
            <div class="text-center sm:text-left">
                <p class="font-display font-bold text-3xl sm:text-4xl text-cyan glow-cyan">2+</p>
                <p class="font-mono text-[0.65rem] sm:text-xs text-text-muted mt-1 uppercase tracking-wider">Años de experiencia</p>
            </div>
            <div class="text-center sm:text-left">
                <p class="font-display font-bold text-3xl sm:text-4xl text-cyan glow-cyan">6+</p>
                <p class="font-mono text-[0.65rem] sm:text-xs text-text-muted mt-1 uppercase tracking-wider">Proyectos desarrollados</p>
            </div>
            <div class="text-center sm:text-left">
                <p class="font-display font-bold text-3xl sm:text-4xl text-cyan glow-cyan">100%</p>
                <p class="font-mono text-[0.65rem] sm:text-xs text-text-muted mt-1 uppercase tracking-wider">Compromiso profesional</p>
            </div>
        </div>
    </div>
</section>
