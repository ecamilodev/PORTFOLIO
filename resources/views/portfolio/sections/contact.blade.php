{{-- Contact Section --}}
<section id="contacto" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-magenta" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-magenta glow-magenta tracking-wider uppercase">Contacto</h2>
        </div>

        <div class="grid md:grid-cols-5 gap-8">
            {{-- Form --}}
            <div class="md:col-span-3 panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded border border-neon-green/30 bg-neon-green/5">
                        <p class="font-mono text-sm text-neon-green">✓ {{ session('success') }}</p>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 rounded border border-magenta/30 bg-magenta/5">
                        <p class="font-mono text-sm text-magenta">✗ {{ session('error') }}</p>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" id="contact-form">
                    @csrf

                    {{-- Honeypot --}}
                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                    <div class="grid sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="name" class="block font-mono text-xs text-text-muted mb-2 uppercase tracking-wider">Nombre</label>
                            <input type="text" id="name" name="name" required
                                   class="input-cyber rounded"
                                   placeholder="Tu nombre"
                                   value="{{ old('name') }}"
                                   maxlength="100">
                            @error('name')
                                <p class="font-mono text-xs text-magenta mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block font-mono text-xs text-text-muted mb-2 uppercase tracking-wider">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="input-cyber rounded"
                                   placeholder="tu@email.com"
                                   value="{{ old('email') }}"
                                   maxlength="150">
                            @error('email')
                                <p class="font-mono text-xs text-magenta mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block font-mono text-xs text-text-muted mb-2 uppercase tracking-wider">Asunto</label>
                        <input type="text" id="subject" name="subject" required
                               class="input-cyber rounded"
                               placeholder="¿En qué puedo ayudarte?"
                               value="{{ old('subject') }}"
                               maxlength="150">
                        @error('subject')
                            <p class="font-mono text-xs text-magenta mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block font-mono text-xs text-text-muted mb-2 uppercase tracking-wider">Mensaje</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="input-cyber rounded resize-none"
                                  placeholder="Cuéntame sobre tu proyecto..."
                                  maxlength="2000">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="font-mono text-xs text-magenta mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-cyber w-full justify-center">
                        Enviar Mensaje
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </form>

                @if(config('portfolio.recaptcha.site_key'))
                    <script>
                        (function () {
                            var form = document.getElementById('contact-form');
                            if (!form) return;

                            form.addEventListener('submit', function (e) {
                                e.preventDefault();

                                if (typeof grecaptcha === 'undefined') {
                                    console.error('reCAPTCHA no cargó correctamente. Verifica tu conexión e inténtalo de nuevo.');
                                    return;
                                }

                                grecaptcha.ready(function () {
                                    grecaptcha.execute('{{ config('portfolio.recaptcha.site_key') }}', { action: 'contact' })
                                        .then(function (token) {
                                            console.log('reCAPTCHA token:', token);
                                            document.getElementById('recaptcha_token').value = token;
                                            form.submit();
                                        })
                                        .catch(function (error) {
                                            console.error('Error al ejecutar reCAPTCHA:', error);
                                        });
                                });
                            });
                        })();
                    </script>
                @endif
            </div>

            {{-- Contact info --}}
            <div class="md:col-span-2 space-y-6">
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 delay-100">
                    <h3 class="font-display font-bold text-sm text-cyan tracking-wider uppercase mb-4">Conecta Conmigo</h3>
                    <div class="space-y-4">
                        <a href="https://github.com/ecamilodev" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-3 text-text hover:text-cyan transition-colors group">
                            <div class="w-9 h-9 rounded border border-border group-hover:border-cyan/50 flex items-center justify-center transition-colors bg-void/50">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            <div>
                                <p class="font-mono text-sm">GitHub</p>
                                <p class="font-mono text-xs text-text-muted">ecamilodev</p>
                            </div>
                        </a>

                        <a href="https://linkedin.com/in/ecamilodev" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-3 text-text hover:text-cyan transition-colors group">
                            <div class="w-9 h-9 rounded border border-border group-hover:border-cyan/50 flex items-center justify-center transition-colors bg-void/50">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </div>
                            <div>
                                <p class="font-mono text-sm">LinkedIn</p>
                                <p class="font-mono text-xs text-text-muted">ecamilodev</p>
                            </div>
                        </a>

                        <a href="mailto:sanchezeduard68@gmail.com"
                           class="flex items-center gap-3 text-text hover:text-cyan transition-colors group">
                            <div class="w-9 h-9 rounded border border-border group-hover:border-cyan/50 flex items-center justify-center transition-colors bg-void/50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="font-mono text-sm">Email</p>
                                <p class="font-mono text-xs text-text-muted">sanchezeduard68@gmail.com</p>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Terminal whoami --}}
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 delay-200">
                    <div class="font-mono text-xs space-y-1">
                        <p class="text-text-muted">$ whoami</p>
                        <p class="text-neon-green">eduard_sg → desarrollador apasionado por la tecnología</p>
                        <p class="text-text-muted cursor-blink">$ </p>
                    </div>
                </div>

                {{-- Location & availability --}}
                <div class="panel p-6 fade-up opacity-0 translate-y-4 transition-all duration-700 delay-300">
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <span class="font-mono text-xs text-text-muted uppercase tracking-wider">Ubicación</span>
                            <span class="font-mono text-sm text-text">Colombia, CO</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="font-mono text-xs text-text-muted uppercase tracking-wider">Disponibilidad</span>
                            <span class="font-mono text-sm text-text">Remoto / Freelance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
