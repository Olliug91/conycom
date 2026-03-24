<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Corporate Identity
    |--------------------------------------------------------------------------
    |
    | This file contains the centralized data for Conconectivdad y Comunicaciones
    | S.L. to ensure consistency across the website (footer, contact, etc.).
    |
    */

    'name' => 'CONECTIVIDAD Y COMUNICACIONES S.L.',
    'email' => 'guille@conycom.com',
    'email_secondary' => 'guillermo.tudela@conycom.com',
    'phone' => '676362738',
    'phone_formatted' => '+34 676 36 27 38',
    'address' => 'Camino Nuevo Picaña 5 22, 46014 Valencia',
    'city' => 'Valencia',
    'zip' => '46014',
    'linkedin' => 'https://linkedin.com/company/conycom', // Global Placeholder
    'maps_link' => 'https://www.google.com/maps/search/?api=1&query=Camino+Nuevo+Pica%C3%B1a+5+22+46014+Valencia',
    
    // Datos Legales (LSSI)
    'cif' => 'B-XXXXXXXX', // User will need to fill this
    'registry_info' => 'Inscrita en el Registro Mercantil de Valencia, al Tomo XXX, Folio XXX, Hoja V-XXXXXX.',

    /*
    |--------------------------------------------------------------------------
    | Visual Assets
    |--------------------------------------------------------------------------
    */
    'logo' => 'storage/img/logo.png', // Corrected for storage:link
    'logo_alt' => 'CONYCOM Logo',
    'logo_height_nav' => 'h-20', // Tailwind height class
    'logo_height_footer' => 'h-16',
    /*
    |--------------------------------------------------------------------------
    | The Team (Spec-015)
    |--------------------------------------------------------------------------
    */
    'team' => [
        'founder' => [
            'name' => 'Guillermo Tudela Soler',
            'role' => 'Fundador & Legado Estratégico',
            'vision' => 'Desde 1996 construyendo la base de nuestra fiabilidad hoy.',
            'image' => 'storage/img/guille_padre.jpg',
            'linkedin' => 'https://www.linkedin.com/in/guillermo-tudela-soler-9451b4226/',
        ],
        'lead' => [
            'name' => 'Guillermo Tudela Marco',
            'role' => 'Dirección Técnica & Innovation',
            'vision' => 'Liderando la evolución hacia el SDD y la automatización proactiva.',
            'image' => 'storage/img/guille.jpg',
            'linkedin' => 'https://linkedin.com/in/guillermo-tudela',
        ],
        'collaborator' => [
            'name' => 'Belén García Miranda',
            'role' => 'Estrategia de Marketing & Diseño (Betopeer)',
            'vision' => 'Transformando la complejidad técnica en experiencias visuales memorables.',
            'image' => 'storage/img/belen.jpg',
            'linkedin' => 'https://www.linkedin.com/in/bel%C3%A9n-garc%C3%ADa-miranda-14060212/',
        ],
    ],
];
