{{-- Hero Section --}}
<section id="inicio" class="relative min-h-screen flex items-center scanlines overflow-hidden">
    {{-- Background gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-void via-panel to-void"></div>
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

        {{-- Main content --}}
        <div class="space-y-6">
            <p class="font-mono text-sm text-cyan tracking-wider">
                <span class="text-text-muted">&gt;</span> Desarrollador Web
            </p>

            <h2 class="font-display font-bold text-5xl sm:text-6xl lg:text-7xl text-white tracking-tight leading-[1.1]">
                EDUARD<span class="text-cyan">_</span>SG
            </h2>

            <p id="typing-text"
               data-text="Construyendo el futuro, línea por línea de código."
               class="font-mono text-lg text-text-muted cursor-blink max-w-lg h-7">
            </p>

            <p class="text-text max-w-xl leading-relaxed">
                Desarrollador Backend especializado en Laravel. Me enfoco en crear aplicaciones web rápidas,
                escalables y con arquitecturas seguras. Apasionado por la tecnología y los detalles.
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

        {{-- Availability badge --}}
        <div class="mt-16 inline-flex items-center gap-2 font-mono text-xs text-text-muted">
            <span class="w-2 h-2 rounded-full bg-neon-green pulse-green"></span>
            <span class="uppercase tracking-wider">Disponible para trabajos freelance</span>
        </div>
    </div>
</section>
