<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eduard Sánchez — Software Engineer especializado en Backend Development con Laravel, PHP, DevOps y Linux.">
    <meta name="author" content="Eduard Sánchez">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Eduard Sánchez — Software Engineer">
    <meta property="og:description" content="Eduard Sánchez — Software Engineer especializado en Backend Development con Laravel, PHP, DevOps y Linux.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eduard Sánchez — Software Engineer</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/brand/Favicon32.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/images/brand/Favicon192.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rajdhani:wght@500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <!-- Swiper.js (carrusel de certificaciones) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen antialiased">

    <!-- Mobile header -->
    <header class="lg:hidden fixed top-0 inset-x-0 z-50 bg-panel/95 backdrop-blur border-b border-border px-4 py-3 flex items-center justify-between">
        <a href="#inicio" class="font-display font-bold text-lg text-cyan glow-cyan tracking-wider">
            EDUARD_SG
        </a>
        <button id="menu-toggle" class="text-text-muted hover:text-cyan transition-colors" aria-label="Abrir menú">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </header>

    <div class="lg:flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 w-64 bg-panel border-r border-border flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300">
            <!-- Brand -->
            <div class="p-6 border-b border-border">
                <p class="font-mono text-[0.65rem] text-text-muted tracking-widest uppercase mb-2">Portfolio v1.0</p>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-cyan/10 border border-cyan/30 flex items-center justify-center overflow-hidden">
                        <img src="/images/brand/Favicon40.png" alt="Eduard Sánchez" width="40" height="40" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h1 class="font-display font-bold text-cyan glow-cyan tracking-wider text-lg leading-none">EDUARD_SG</h1>
                        <p class="font-mono text-[0.6rem] text-magenta tracking-[0.2em] uppercase">Software Engineer</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 py-6 px-4 space-y-1">
                <a href="#inicio" class="nav-link active flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Inicio
                </a>
                <a href="#sobre-mi" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Sobre Mí
                </a>
                <a href="#servicios" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7h-3V6a3 3 0 00-3-3h-4a3 3 0 00-3 3v1H4a1 1 0 00-1 1v11a2 2 0 002 2h14a2 2 0 002-2V8a1 1 0 00-1-1zM9 6a1 1 0 011-1h4a1 1 0 011 1v1H9V6zm11 13H4V9h16v10z"/></svg>
                    Servicios
                </a>
                <a href="#proyectos" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    Proyectos
                </a>
                <a href="#stack" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    Habilidades
                </a>
                <a href="#experiencia" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Experiencia
                </a>
                <a href="#certificaciones" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    Certificaciones
                </a>
                <a href="#contacto" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded text-sm font-medium text-text transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Contacto
                </a>
            </nav>

            <!-- Status -->
            <div class="p-4 mx-4 mb-4 rounded border border-border bg-void/50">
                <div class="flex items-center gap-2 mb-1">
                    <span class="font-mono text-[0.65rem] text-text-muted uppercase tracking-wider">Sistema</span>
                    <span class="w-2 h-2 rounded-full bg-neon-green pulse-green"></span>
                </div>
                <p class="font-mono text-xs text-neon-green">Online</p>
            </div>

            <!-- Footer -->
            <div class="p-4 border-t border-border">
                <p class="font-mono text-[0.6rem] text-text-muted">&copy; {{ date('Y') }} Eduard Sánchez</p>
                <p class="font-mono text-[0.55rem] text-text-muted">Todos los derechos reservados.</p>
            </div>
        </aside>

        <!-- Main content -->
        <main class="lg:ml-64 w-full pt-14 lg:pt-0">
            @yield('content')
        </main>
    </div>

    <!-- Swiper.js (carrusel de certificaciones) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var certsSwiperEl = document.querySelector('.certs-swiper');
            if (certsSwiperEl && window.Swiper) {
                new Swiper(certsSwiperEl, {
                    loop: true,
                    spaceBetween: 24,
                    slidesPerView: 1,
                    breakpoints: {
                        640:  { slidesPerView: 2 },
                        1024: { slidesPerView: 3 },
                    },
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    navigation: {
                        nextEl: '.certs-swiper-next',
                        prevEl: '.certs-swiper-prev',
                    },
                    pagination: {
                        el: '.certs-swiper-pagination',
                        clickable: true,
                    },
                });
            }
        });
    </script>

</body>
</html>
