<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = $this->getProjects();
        $skills   = $this->getSkills();
        $experience = $this->getExperience();

        return view('portfolio.index', compact('projects', 'skills', 'experience'));
    }

    public function contact(Request $request)
    {
        $key = 'contact:' . ($request->ip() ?? 'unknown');

        if (RateLimiter::tooManyAttempts($key, 3)) {
            return back()->with('error', 'Demasiados intentos. Inténtalo de nuevo en unos minutos.');
        }

        RateLimiter::hit($key, 300); // 5 min window

        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email:rfc,dns', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Honeypot check
        if ($request->filled('website')) {
            return back()->with('success', 'Mensaje enviado correctamente.');
        }

        Mail::raw(
            "Nombre: {$validated['name']}\n"
            . "Email: {$validated['email']}\n"
            . "Asunto: {$validated['subject']}\n\n"
            . $validated['message'],
            function ($mail) use ($validated) {
                $mail->to(config('portfolio.contact_email', 'contacto@example.com'))
                     ->subject("Portfolio — {$validated['subject']}")
                     ->replyTo($validated['email'], $validated['name']);
            }
        );

        return back()->with('success', 'Mensaje enviado correctamente. Te responderé pronto.');
    }

    private function getProjects(): array
    {
        return [
            [
                'title'       => 'TIMI Platform',
                'description' => 'Plataforma de transporte tipo ride-sharing con apps móviles para usuarios y conductores, panel administrativo web y sistema de pagos integrado con Stripe.',
                'tags'        => ['Laravel', 'Flutter', 'MySQL', 'Stripe', 'Firebase'],
                'type'        => 'Full Stack',
                'role'        => 'Lead Developer',
            ],
            [
                'title'       => 'CMS S.A.S',
                'description' => 'Sitio web corporativo para empresa del sector construcción. Panel administrador, galería de proyectos, formulario de contacto y cumplimiento legal (Ley 1581).',
                'tags'        => ['Laravel 12', 'Tailwind CSS', 'Alpine.js', 'MySQL'],
                'type'        => 'Full Stack',
                'role'        => 'Developer',
            ],
            [
                'title'       => 'DeUna Marketing',
                'description' => 'Plataforma web de marketing digital con auditoría de seguridad completa, detección de vulnerabilidades y hardening de infraestructura.',
                'tags'        => ['Laravel', 'Livewire', 'MySQL', 'Security Audit'],
                'type'        => 'Backend & Security',
                'role'        => 'Developer & Auditor',
            ],
            [
                'title'       => 'Cuponex',
                'description' => 'Marketplace de cupones y descuentos con sistema de carruseles dinámicos, panel de administración y gestión de comercios aliados.',
                'tags'        => ['Laravel', 'Livewire', 'MySQL', 'Blade'],
                'type'        => 'Backend',
                'role'        => 'Backend Developer',
            ],
            [
                'title'       => 'ELSo Club Migration',
                'description' => 'Plan de migración de plataforma educativa WordPress/LearnDash a Laravel. Arquitectura LMS, integración Stripe, capa social con Laravel Reverb.',
                'tags'        => ['Laravel', 'Stripe', 'Laravel Reverb', 'MySQL'],
                'type'        => 'Architecture & Planning',
                'role'        => 'Solutions Architect',
            ],
            [
                'title'       => 'VPS Security Audit',
                'description' => 'Auditoría integral de seguridad en servidor VPS: análisis de infraestructura, detección de vulnerabilidades críticas y plan de migración documentado.',
                'tags'        => ['Linux', 'Security', 'Docker', 'Infrastructure'],
                'type'        => 'Infrastructure & Security',
                'role'        => 'Security Auditor',
            ],
        ];
    }

    private function getSkills(): array
    {
        return [
            'backend' => [
                ['name' => 'Laravel',    'icon' => 'laravel'],
                ['name' => 'PHP',        'icon' => 'php'],
                ['name' => 'MySQL',      'icon' => 'mysql'],
                ['name' => 'REST APIs',  'icon' => 'api'],
                ['name' => 'Livewire',   'icon' => 'livewire'],
            ],
            'frontend' => [
                ['name' => 'Tailwind CSS', 'icon' => 'tailwind'],
                ['name' => 'Alpine.js',    'icon' => 'alpine'],
                ['name' => 'Blade',        'icon' => 'blade'],
                ['name' => 'HTML5',        'icon' => 'html'],
                ['name' => 'CSS3',         'icon' => 'css'],
                ['name' => 'JavaScript',   'icon' => 'js'],
            ],
            'mobile' => [
                ['name' => 'Flutter',  'icon' => 'flutter'],
                ['name' => 'Dart',     'icon' => 'dart'],
                ['name' => 'Firebase', 'icon' => 'firebase'],
            ],
            'devops' => [
                ['name' => 'Docker',   'icon' => 'docker'],
                ['name' => 'Linux',    'icon' => 'linux'],
                ['name' => 'Git',      'icon' => 'git'],
                ['name' => 'CI/CD',    'icon' => 'cicd'],
                ['name' => 'SSH',      'icon' => 'ssh'],
            ],
            'security' => [
                ['name' => 'ISO 27001',    'icon' => 'iso'],
                ['name' => 'Pen Testing',  'icon' => 'pentest'],
                ['name' => 'OWASP',        'icon' => 'owasp'],
                ['name' => 'ISO 19011',    'icon' => 'audit'],
            ],
        ];
    }

    private function getExperience(): array
    {
        return [
            [
                'role'    => 'Backend / Full Stack Developer',
                'company' => 'Steps Consulting Corp',
                'location'=> 'Puerto Rico (Remoto)',
                'period'  => '2025 – Presente',
                'current' => true,
                'tasks'   => [
                    'Desarrollo y mantenimiento del backend Laravel para la plataforma TIMI (ride-sharing)',
                    'Implementación de sistema de pagos con Stripe (authorize/capture)',
                    'Desarrollo de apps móviles Flutter para usuarios y conductores',
                    'Auditorías de seguridad en infraestructura VPS y aplicaciones web',
                    'Gestión de despliegues en producción y CI/CD',
                ],
            ],
            [
                'role'    => 'Desarrollador Web Freelance',
                'company' => 'Independiente',
                'location'=> 'Colombia',
                'period'  => '2025 – Presente',
                'current' => true,
                'tasks'   => [
                    'Diseño y desarrollo de sitios corporativos con Laravel',
                    'Auditorías de seguridad web (ISO 27001)',
                    'Consultoría en arquitectura de software y migración de plataformas',
                ],
            ],
        ];
    }
}
