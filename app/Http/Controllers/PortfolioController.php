<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class PortfolioController extends Controller
{
    public function index()
    {
        $services = $this->getServices();
        $projects = $this->getProjects();
        $skills   = $this->getSkills();
        $experience = $this->getExperience();
        $certifications = $this->getCertifications();

        return view('portfolio.index', compact('services', 'projects', 'skills', 'experience', 'certifications'));
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

    private function getServices(): array
    {
        return [
            [
                'title'       => 'Backend Development',
                'description' => 'Diseño y desarrollo de APIs REST, servicios backend y lógica de negocio utilizando Laravel y PHP.',
                'icon'        => 'backend',
            ],
            [
                'title'       => 'Arquitectura de Software',
                'description' => 'Diseño de aplicaciones escalables, mantenibles y con arquitecturas limpias orientadas al crecimiento.',
                'icon'        => 'architecture',
            ],
            [
                'title'       => 'Web Development',
                'description' => 'Desarrollo de aplicaciones web modernas, sitios corporativos y plataformas digitales completas.',
                'icon'        => 'web',
            ],
            [
                'title'       => 'DevOps',
                'description' => 'Configuración y administración de servidores Linux, VPS, despliegues automatizados y CI/CD.',
                'icon'        => 'devops',
            ],
            [
                'title'       => 'Consultoría Tecnológica',
                'description' => 'Asesoría en migración de plataformas, optimización de rendimiento y seguridad web.',
                'icon'        => 'consulting',
            ],
        ];
    }

    private function getProjects(): array
    {
        return [
            [
                'title'    => 'TIMI Platform',
                'type'     => 'Full Stack',
                'role'     => 'Lead Developer',
                'tags'     => ['Laravel', 'Flutter', 'Stripe', 'REST API', 'Firebase', 'MySQL'],
                'url'      => 'https://www.timiweb.com/',
                'problem'  => 'Empresa de transporte necesitaba una plataforma digital completa para conectar conductores y pasajeros en Puerto Rico, con pagos integrados y apps móviles.',
                'solution' => 'Desarrollo de ecosistema completo: backend Laravel con APIs REST, sistema de pagos Stripe (authorize/capture), apps Flutter para usuarios y conductores, panel administrativo web y notificaciones en tiempo real con Firebase.',
                'result'   => 'Plataforma en producción operando en Puerto Rico con sistema de pagos funcional y apps publicadas en Google Play.',
            ],
            [
                'title'    => 'CMS S.A.S',
                'type'     => 'Full Stack',
                'role'     => 'Developer',
                'tags'     => ['Laravel 12', 'Tailwind CSS', 'Alpine.js', 'MySQL'],
                'url'      => 'https://cmssas.com/',
                'problem'  => 'Empresa de construcción necesitaba presencia digital profesional y un sitio que cumpliera con la normativa legal colombiana.',
                'solution' => 'Desarrollo de sitio corporativo con Laravel 12, panel administrador, galería de proyectos, formulario de contacto y cumplimiento de Ley 1581 de protección de datos.',
                'result'   => 'Sitio web en producción con mejor presentación digital de la empresa y cumplimiento legal completo.',
            ],
            [
                'title'    => 'DeUna Marketing',
                'type'     => 'Backend & Security',
                'role'     => 'Developer & Auditor',
                'tags'     => ['Laravel', 'Livewire', 'Security Audit', 'MySQL'],
                'url'      => 'https://deunamarketing.com/',
                'problem'  => 'Plataforma de marketing digital presentaba vulnerabilidades de seguridad críticas que comprometían la integridad del sistema.',
                'solution' => 'Auditoría de seguridad completa, detección de vulnerabilidades (Livewire RCE, script injection), hardening de infraestructura y documentación de hallazgos.',
                'result'   => 'Vulnerabilidades críticas remediadas y plataforma asegurada con documentación de auditoría entregada.',
            ],
            [
                'title'    => 'Cuponex',
                'type'     => 'Backend',
                'role'     => 'Backend Developer',
                'tags'     => ['Laravel', 'Livewire', 'MySQL', 'Blade'],
                'url'      => 'https://www.cuponex.net/',
                'problem'  => 'Marketplace de cupones requería funcionalidades dinámicas para la gestión de comercios aliados y experiencia de usuario mejorada.',
                'solution' => 'Desarrollo backend con Laravel y Livewire, sistema de carruseles dinámicos, panel de administración y gestión de comercios.',
                'result'   => 'Plataforma funcional con gestión eficiente de cupones y comercios aliados.',
            ],
            [
                'title'    => 'ELSo Club',
                'type'     => 'Full Stack',
                'role'     => 'Lead Developer',
                'tags'     => ['Laravel', 'Livewire', 'Stripe', 'Laravel Reverb', 'MySQL'],
                'url'      => 'https://elso.club/',
                'problem'  => 'Plataforma educativa en WordPress/LearnDash necesitaba modernización completa para escalar y ofrecer mejor experiencia de usuario con funciones sociales.',
                'solution' => 'Diseño de arquitectura Laravel para plataforma de cursos online con integración de pagos Stripe, capa social con Laravel Reverb y sistema donde cualquier usuario puede crear y vender cursos.',
                'result'   => 'Arquitectura completa diseñada y en desarrollo activo con stack moderno.',
            ],
            [
                'title'    => 'VPS Security Audit',
                'type'     => 'Infrastructure & Security',
                'role'     => 'Security Auditor',
                'tags'     => ['Linux', 'Security', 'Docker', 'Infrastructure'],
                'url'      => null,
                'problem'  => 'Servidor VPS de producción presentaba riesgos críticos: sistema operativo EOL, sin firewall, versiones obsoletas de MySQL y Laravel.',
                'solution' => 'Auditoría integral de infraestructura, análisis de vulnerabilidades, documentación completa con reporte técnico, presentación ejecutiva y plan de migración de 20 páginas.',
                'result'   => 'Hallazgos críticos documentados y plan de remediación entregado para migración segura.',
            ],
        ];
    }

    private function getSkills(): array
    {
        return [
            'backend' => [
                ['name' => 'Laravel',    'icon' => 'laravel'],
                ['name' => 'PHP',        'icon' => 'php'],
                ['name' => 'REST APIs',  'icon' => 'api'],
                ['name' => 'MySQL',      'icon' => 'mysql'],
                ['name' => 'Firebase',   'icon' => 'firebase'],
                ['name' => 'Java',       'icon' => 'java'],
            ],
            'devops' => [
                ['name' => 'Linux',     'icon' => 'linux'],
                ['name' => 'Docker',    'icon' => 'docker'],
                ['name' => 'Git',       'icon' => 'git'],
                ['name' => 'CI/CD',     'icon' => 'cicd'],
                ['name' => 'Composer',  'icon' => 'composer'],
                ['name' => 'cPanel',    'icon' => 'cpanel'],
            ],
            'security' => [
                ['name' => 'OWASP',           'icon' => 'owasp'],
                ['name' => 'ISO 27001',       'icon' => 'iso'],
                ['name' => 'Security Audit',  'icon' => 'audit'],
                ['name' => 'Web Security',    'icon' => 'websec'],
            ],
            'software' => [
                ['name' => 'GitHub',  'icon' => 'github'],
                ['name' => 'VS Code', 'icon' => 'vscode'],
                ['name' => 'Postman', 'icon' => 'postman'],
                ['name' => 'Astro',   'icon' => 'astro'],
                ['name' => 'Flutter', 'icon' => 'flutter'],
            ],
            'knowledge' => [
                ['name' => 'Machine Learning',       'icon' => 'ml'],
                ['name' => 'Software Architecture',  'icon' => 'architecture'],
                ['name' => 'Networks',               'icon' => 'networks'],
                ['name' => 'Advanced Networking',    'icon' => 'networking'],
                ['name' => 'System Auditing',        'icon' => 'sysaudit'],
            ],
        ];
    }

    private function getCertifications(): array
    {
        return [
            [
                'title'       => 'ISO 27001:2022',
                'description' => 'Sistemas de Gestión de la Seguridad de la Información',
                'issuer'      => 'Grupo Élite Organizacional / ACCIT',
                'date'        => '2025',
                'image'       => 'images/certificates/Certificado-0C8C5B55E8A3C4C0856A.jpg',
                'url'         => null,
            ],
            [
                'title'       => 'ISO 19011:2018',
                'description' => 'Directrices para Auditar Sistemas de Gestión',
                'issuer'      => 'Grupo Élite Organizacional / ACCIT',
                'date'        => '2025',
                'image'       => 'images/certificates/Certificado-1EB4505084D87118B8C7.jpg',
                'url'         => null,
            ],
            [
                'title'       => 'ISO 27001:2022 — IA en Sistemas de Gestión',
                'description' => 'Uso de herramientas de inteligencia artificial en sistemas de gestión de la seguridad de la información',
                'issuer'      => 'Grupo Élite Organizacional / ACCIT',
                'date'        => '2025',
                'image'       => 'images/certificates/Certificado-B8B26F24186191C7AF8A.jpg',
                'url'         => null,
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
                    'Desarrollo y mantenimiento de aplicaciones web escalables con Laravel y PHP.',
                    'Diseño e implementación de APIs REST para la integración de servicios y plataformas externas.',
                    'Implementación de sistemas de pago utilizando Stripe (Authorize & Capture).',
                    'Desarrollo y mantenimiento de aplicaciones móviles con Flutter para usuarios y conductores.',
                    'Gestión de despliegues en producción y procesos de integración continua (CI/CD).',
                    'Administración y optimización de servidores Linux y VPS para entornos productivos.',
                    'Auditorías de seguridad y optimización del rendimiento en aplicaciones web.',
                    'Participación en el diseño de arquitectura de software y procesos de migración de plataformas.',
                ],
            ],
            [
                'role'    => 'Software Developer Freelance',
                'company' => 'Independiente',
                'location'=> 'Colombia',
                'period'  => '2025 – Presente',
                'current' => true,
                'tasks'   => [
                    'Desarrollo de sitios web corporativos y aplicaciones utilizando Laravel y tecnologías modernas del ecosistema web.',
                    'Diseño de arquitecturas backend orientadas al rendimiento, escalabilidad y mantenibilidad del software.',
                    'Consultoría técnica para migración y modernización de aplicaciones y servidores.',
                    'Implementación de soluciones de seguridad web basadas en buenas prácticas e ISO 27001.',
                    'Optimización de bases de datos MySQL y procesos backend para mejorar tiempos de respuesta.',
                    'Configuración y despliegue de proyectos web en entornos Linux y VPS.',
                ],
            ],
        ];
    }
}
