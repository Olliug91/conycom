<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    private function getProjects()
    {
        return [
            [
                'id' => '001/TP',
                'title' => 'Top-Pharma ERP',
                'description' => 'Sistema ERP Cloud de misión crítica para la distribución mayorista farmacéutica. Gestión integral de almacén FEFO, verificación SEVeM y servidor telemático Fedicom v3 en alta disponibilidad.',
                'link' => 'https://disfarsor.com',
                'tags' => ['#Laravel', '#Livewire', '#SEVeM', '#Fedicom', '#Pharma'],
            ],
            [
                'id' => '002/NC',
                'title' => 'CC Nuevo Centro',
                'description' => 'Plataforma autogestionada para la generación dinámica de contenidos y herramientas de gestión de comunidad comercial. Un eje digital para la interacción retail.',
                'link' => 'https://nuevocentro.es',
                'tags' => ['#CMS', '#Community', '#Self_Managed'],
            ],
            [
                'id' => '003/IS',
                'title' => 'Industrias Saludes',
                'description' => 'Integración crítica entre Microsoft Dynamics y Magento. Middleware de sincronización en tiempo real para el mantenimiento automatizado de catálogos.',
                'link' => 'https://isaludes.com',
                'tags' => ['#Dynamics', '#Magento', '#Middleware', '#Sync'],
            ],
            [
                'id' => '004/FK',
                'title' => 'Federación Karate CV',
                'description' => 'Sistema de gestión deportiva y ERP federativo. Automatización de licencias, eventos y registros de alta disponibilidad.',
                'link' => 'https://fkaratecv.es',
                'tags' => ['#ERP', '#Sports', '#Management'],
            ],
            [
                'id' => '005/BP',
                'title' => 'Betopeer',
                'description' => 'Colaboración técnica en desarrollos WordPress a medida. Soluciones dinámicas diseñadas para una presencia web ágil.',
                'link' => 'https://betopeer.com',
                'tags' => ['#WordPress', '#Agile', '#Consulting'],
            ],
            [
                'id' => '006/FF',
                'title' => 'Fitness Fabra Gym',
                'description' => 'Portal de gestión fitness y comunidad digital. Mejora de la interacción con el usuario y procesos de registro online.',
                'link' => 'https://fitnessfabragym.com',
                'tags' => ['#Fitness', '#Web', '#Community'],
            ],
            [
                'id' => '007/BS',
                'title' => 'BasicSoft Club',
                'description' => 'Plataforma de servicios de software especializado y red de colaboración tecnológica. Soluciones integrales para el ecosistema de asociados del club.',
                'link' => 'https://basicsoftclub.es',
                'tags' => ['#SaaS', '#Club', '#Solutions'],
            ],
            [
                'id' => '008/VB',
                'title' => 'Veribridge',
                'description' => 'Middleware especializado para la conexión de sistemas de facturación con la AEAT (VeriFactu). Solución robusta de cumplimiento normativo fiscal en tiempo real.',
                'link' => 'https://veribridge.guillermotudela.es',
                'tags' => ['#VeriFactu', '#AEAT', '#Middleware', '#Compliance', '#SaaS'],
            ],
            [
                'id' => '009/KX',
                'title' => 'KX Compete',
                'description' => 'Solución integral para la gestión y organización de competiciones deportivas. Incluye funcionalidades para inscripciones, pesajes, sorteos, resultados, scoring y retransmisión en vivo.',
                'link' => 'https://kxcompete.com',
                'tags' => ['#SaaS', '#Sports', '#Competition'],
            ],
        ];
    }

    private function getCaseStudies()
    {
        return [
            [
                'id' => '001/BSPIM',
                'title' => 'Basicsoft PIM (Middleware)',
                'context' => 'Conexión crítica B2B entre ecosistema E-Commerce e Infraestructura ERP.',
                'stack' => ['Laravel', 'Redis', 'Magento API', 'Dynamics API', 'MySQL'],
                'challenge' => 'Sincronizar miles de referencias, precios, stock y pedidos en tiempo real entre un e-commerce basado en Magento y un ERP Microsoft Dynamics, resolviendo cuellos de botella de concurrencia y errores humanos en la actualización de catálogos.',
                'solution' => 'Desarrollo de un Middleware (BSPIM) en Laravel actuando como única fuente de verdad (Single Source of Truth). Implementación de colas asíncronas para el procesamiento por lotes y webhooks para sincronización inmediata de pedidos.',
                'impact' => [
                    'Sincronización' => 'Real-time',
                    'Carga Manual' => '-100%',
                    'Precisión Datos' => '99.9%',
                ],
            ],
            [
                'id' => '002/TP',
                'title' => 'Top-Pharma ERP (Core Distribution)',
                'context' => 'Modernización de arquitectura de misión crítica para la distribución mayorista farmacéutica (Validado en producción en Disfarsor).',
                'stack' => ['Laravel', 'Livewire', 'MariaDB', 'SEVeM API', 'Fedicom v3', 'Queues / Workers'],
                'challenge' => 'Modernizar más de 30 años de lógica de negocio farmacéutica hiper-específica (trazabilidad unitaria, caducidades FEFO, normativas sanitarias estrictas y facturación electrónica) provenientes de un sistema legado en FoxPro, garantizando continuidad operativa absoluta en un almacén de alta rotación.',
                'solution' => 'Implementación del patrón de estrangulación (Strangler Fig Pattern). Coexistencia y migración modular hacia un núcleo en Laravel y Livewire: persistencia reactiva anti-apagones línea a línea, servidor/cliente telemático Fedicom v3, verificación instantánea SEVeM (DataMatrix) y colas asíncronas para reportes fiscales y bancarios.',
                'impact' => [
                    'Trazabilidad' => '100% FEFO',
                    'Interoperabilidad' => 'Fedicom v3',
                    'Disponibilidad' => '99.99%',
                ],
            ],
            [
                'id' => '009/KX',
                'title' => 'Karate Xports (ERP Federativo)',
                'context' => 'Sistema Core y Gestión Deportiva para la Federación de Karate de la Comunidad Valenciana.',
                'stack' => ['Laravel', 'Livewire', 'WebSockets', 'Real-Time', 'AWS'],
                'challenge' => 'Centralizar la gestión integral federativa (licencias, clubes, árbitros) y soportar altos picos de concurrencia durante competiciones multitudinarias (scoring, sorteos, pesajes), donde el más mínimo retraso arruina la experiencia del evento en vivo.',
                'solution' => 'Arquitectura orientada a eventos usando Laravel WebSockets y Livewire. Construcción de un motor de gestión robusto y una interfaz reactiva capaz de actualizar decenas de pantallas de resultados en pabellones deportivos de forma instantánea sin sobrecargar el servidor.',
                'impact' => [
                    'Latencia' => '< 50ms',
                    'Concurrencia' => 'Alta Demanda',
                    'Gestión' => 'Centralizada',
                ],
            ],
        ];
    }

    public function index()
    {
        return view('pages.proyectos', [
            'projects' => $this->getProjects(),
            'caseStudies' => $this->getCaseStudies(),
        ]);
    }

    public function home()
    {
        return view('pages.home', [
            'featuredProjects' => array_slice($this->getProjects(), 0, 4),
        ]);
    }
}
