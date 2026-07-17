{{-- About Section --}}
<section id="sobre-mi" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-cyan glow-cyan tracking-wider uppercase">Sobre Mí</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Bio --}}
            <div class="panel p-6 space-y-4 fade-up opacity-0 translate-y-4 transition-all duration-700">
                <p class="text-text leading-relaxed">
                    Ingeniero de Sistemas y desarrollador web con enfoque en crear soluciones eficientes,
                    escalables y seguras.
                </p>
                <p class="text-text leading-relaxed">
                    Me especializo en el backend con <span class="text-cyan font-medium">Laravel</span>,
                    pero trabajo en todo el stack: desde bases de datos y APIs REST hasta interfaces móviles
                    con <span class="text-cyan font-medium">Flutter</span> y despliegues en
                    <span class="text-cyan font-medium">Linux</span>.
                </p>
                <p class="text-text leading-relaxed">
                    Cuento con certificaciones en <span class="text-neon-green font-medium">ISO 27001:2022</span>
                    e <span class="text-neon-green font-medium">ISO 19011:2018</span>, lo que me permite abordar
                    cada proyecto con una visión integral de seguridad y calidad.
                </p>

                {{-- Quick facts --}}
                <div class="pt-4 space-y-3 border-t border-border">
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Ubicación</span>
                        <span class="font-mono text-sm text-text">Colombia 🇨🇴 (Remoto)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Formación</span>
                        <span class="font-mono text-sm text-text">Ing. Sistemas — 2025</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Enfoque</span>
                        <span class="font-mono text-sm text-text">Backend · Full Stack · Security</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Idiomas</span>
                        <span class="font-mono text-sm text-text">Español (Nativo) · Inglés</span>
                    </div>
                </div>
            </div>

            {{-- Code quote + stats --}}
            <div class="space-y-6">
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 delay-100">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 rounded bg-void/50 border border-border">
                            <p class="font-display font-bold text-3xl text-cyan glow-cyan">6+</p>
                            <p class="font-mono text-xs text-text-muted mt-1">Proyectos en producción</p>
                        </div>
                        <div class="text-center p-4 rounded bg-void/50 border border-border">
                            <p class="font-display font-bold text-3xl text-magenta glow-magenta">2</p>
                            <p class="font-mono text-xs text-text-muted mt-1">Certificaciones ISO</p>
                        </div>
                        <div class="text-center p-4 rounded bg-void/50 border border-border">
                            <p class="font-display font-bold text-3xl text-neon-green glow-green">3+</p>
                            <p class="font-mono text-xs text-text-muted mt-1">Auditorías de seguridad</p>
                        </div>
                        <div class="text-center p-4 rounded bg-void/50 border border-border">
                            <p class="font-display font-bold text-3xl text-neon-yellow">100%</p>
                            <p class="font-mono text-xs text-text-muted mt-1">Trabajo remoto</p>
                        </div>
                    </div>
                </div>

                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 delay-200">
                    <div class="flex items-start gap-3">
                        <span class="text-2xl text-cyan opacity-50 font-mono leading-none">{</span>
                        <div>
                            <p class="font-mono text-sm text-text italic">
                                "El código es poesía cuando resuelve<br>problemas reales de forma elegante."
                            </p>
                        </div>
                        <span class="text-2xl text-cyan opacity-50 font-mono leading-none ml-auto">}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
