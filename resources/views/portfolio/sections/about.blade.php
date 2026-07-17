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
                    Ingeniero de Sistemas especializado en el desarrollo de aplicaciones web utilizando
                    <span class="text-cyan font-medium">Laravel</span> y <span class="text-cyan font-medium">PHP</span>.
                    Cuento con experiencia en el diseño de arquitecturas backend, desarrollo de APIs REST,
                    integración de servicios externos y despliegue de aplicaciones en entornos Linux.
                </p>
                <p class="text-text leading-relaxed">
                    Me apasiona construir soluciones escalables, seguras y mantenibles, participando tanto
                    en el desarrollo del software como en la optimización de servidores y procesos de producción.
                </p>
                <p class="text-text leading-relaxed">
                    Actualmente continúo fortaleciendo mis conocimientos en arquitectura de software,
                    DevOps y tecnologías modernas del ecosistema web para crear productos digitales de alto impacto.
                </p>

                {{-- Quick facts --}}
                <div class="pt-4 space-y-3 border-t border-border">
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Ubicación</span>
                        <span class="font-mono text-sm text-text">Colombia 🇨🇴 (Remoto)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Formación</span>
                        <span class="font-mono text-sm text-text">Ing. Sistemas — 2020-2025</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Enfoque</span>
                        <span class="font-mono text-sm text-text">Backend · Full Stack · DevOps</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs text-text-muted w-24">Idiomas</span>
                        <span class="font-mono text-sm text-text">Español · Inglés</span>
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
            </div>
        </div>
    </div>
</section>
