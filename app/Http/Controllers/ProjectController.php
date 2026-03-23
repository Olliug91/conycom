<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private function getProjects()
    {
        return [
            [
                'id' => '001/DS',
                'title' => 'Disfarsor Farmacéutica',
                'description' => 'Soluciones B2B avanzadas para el sector de la distribución farmacéutica. Optimización de procesos y canal de venta digital.',
                'link' => 'https://disfarsor.com',
                'tags' => ['#Laravel', '#B2B', '#Pharma'],
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
                'tags' => ['#Software', '#Club', '#Solutions'],
            ],
            [
                'id' => '008/VB',
                'title' => 'Veribridge',
                'description' => 'Middleware especializado para la conexión de sistemas de facturación con la AEAT (VeriFactu). Solución robusta de cumplimiento normativo fiscal en tiempo real.',
                'link' => 'https://veribridge.guillermotudela.es',
                'tags' => ['#VeriFactu', '#AEAT', '#Middleware', '#Compliance'],
            ],
        ];
    }

    public function index()
    {
        return view('pages.proyectos', [
            'projects' => $this->getProjects()
        ]);
    }

    public function home()
    {
        return view('pages.home', [
            'featuredProjects' => array_slice($this->getProjects(), 0, 4)
        ]);
    }
}
