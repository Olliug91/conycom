<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProjectTest extends TestCase
{
    public function test_projects_page_displays_top_pharma_erp_and_enterprise_case_study(): void
    {
        $response = $this->get('/proyectos');

        $response->assertStatus(200);
        $response->assertSee('Top-Pharma ERP');
        $response->assertSee('001/TP');
        $response->assertSee('002/TP');
        $response->assertSee('SEVeM');
        $response->assertSee('Fedicom v3');
        $response->assertSee('100% FEFO');
        $response->assertSee('Strangler Fig Pattern');
        $response->assertSee('https://top-pharma.es');
    }

    public function test_home_page_features_top_pharma_as_first_showcase_project(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Top-Pharma ERP');
        $response->assertSee('001/TP');
    }
}
