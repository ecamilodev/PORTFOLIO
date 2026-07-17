{{-- Certifications Section --}}
<section id="certificaciones" class="py-20 px-6 lg:px-12">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center gap-3 mb-10">
            <svg class="w-5 h-5 text-neon-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
            <h2 class="font-display font-bold text-2xl text-neon-yellow tracking-wider uppercase">Certificaciones</h2>
        </div>

        @if(count($certifications))
            <div class="relative fade-up opacity-0 translate-y-4 transition-all duration-700">
                <div class="certs-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($certifications as $cert)
                            <div class="swiper-slide h-auto pb-10">
                                <div class="panel h-full flex flex-col overflow-hidden">
                                    {{-- Image --}}
                                    <div class="aspect-[3/4] bg-void flex items-center justify-center overflow-hidden border-b border-border">
                                        <img src="{{ asset($cert['image']) }}"
                                             alt="{{ $cert['title'] }}"
                                             loading="lazy"
                                             class="w-full h-full object-contain">
                                    </div>

                                    {{-- Info --}}
                                    <div class="p-5 flex-1 flex flex-col">
                                        <h3 class="font-display font-bold text-white leading-snug">{{ $cert['title'] }}</h3>
                                        @if(!empty($cert['description']))
                                            <p class="text-sm text-text-muted mt-1">{{ $cert['description'] }}</p>
                                        @endif
                                        <div class="flex items-center gap-2 mt-3 pt-3 border-t border-border">
                                            <span class="font-mono text-xs text-cyan">{{ $cert['issuer'] }}</span>
                                            <span class="text-text-muted">·</span>
                                            <span class="font-mono text-xs text-text-muted">{{ $cert['date'] }}</span>
                                        </div>
                                        @if(!empty($cert['url']))
                                            <a href="{{ $cert['url'] }}" target="_blank" rel="noopener noreferrer"
                                               class="inline-flex items-center gap-1 font-mono text-xs text-neon-yellow hover:underline mt-3">
                                                Ver credencial
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Pagination dots --}}
                    <div class="certs-swiper-pagination mt-2"></div>
                </div>

                {{-- Navigation arrows --}}
                <button type="button" class="certs-swiper-prev" aria-label="Certificado anterior">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button type="button" class="certs-swiper-next" aria-label="Siguiente certificado">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        @else
            <p class="font-mono text-sm text-text-muted">Próximamente nuevas certificaciones.</p>
        @endif
    </div>
</section>
