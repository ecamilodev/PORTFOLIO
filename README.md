# Eduard Sánchez — Portfolio

Portafolio profesional de desarrollador web construido con **Laravel 12**, **Tailwind CSS** y **Alpine.js**.

Diseño cyberpunk/terminal con estética oscura, acentos neón y tipografía monospace.

## Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Tailwind CSS 4, Alpine.js, Vite
- **Fuentes:** Rajdhani, Share Tech Mono, Inter

## Instalación

```bash
# Clonar e instalar
git clone https://github.com/ecamilodev/portfolio.git
cd portfolio
composer install
npm install

# Configurar
cp .env.example .env
php artisan key:generate

# Desarrollo
npm run dev
php artisan serve
```

## Build para producción

```bash
npm run build
```

Los assets compilados se generan en `public/build/`.

## Deploy en Hostinger (Shared Hosting)

1. Compilar assets localmente: `npm run build`
2. Subir el proyecto vía SCP (sin `node_modules/` ni `vendor/`)
3. Ejecutar `composer install --no-dev --optimize-autoloader` en el servidor
4. Copiar `public/` a `public_html/` y ajustar `index.php` para apuntar a la carpeta del proyecto
5. Crear symlink de storage: `ln -s ../laravel_app/storage/app/public public_html/storage`

## Seguridad

- Middleware de headers de seguridad (CSP, HSTS, X-Frame-Options)
- Rate limiting en formulario de contacto
- Honeypot anti-spam
- Validación server-side estricta
- CSRF protection en todos los formularios
- Session encryption habilitada

## Configuración

| Variable | Descripción |
|---|---|
| `PORTFOLIO_CONTACT_EMAIL` | Email destino del formulario de contacto |
| `MAIL_*` | Configuración SMTP para envío de correos |

## Licencia

Código propietario. © Eduard Sánchez.
