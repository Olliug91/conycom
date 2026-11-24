<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamTest extends TestCase
{
    public function test_team_page_displays_all_four_members_including_javier_cuervas(): void
    {
        $response = $this->get('/quienes-somos');

        $response->assertStatus(200);
        $response->assertSee('Guillermo Tudela Soler');
        $response->assertSee('Guillermo Tudela Marco');
        $response->assertSee('Javier Cuervas María');
        $response->assertSee('Belén García Miranda');
        $response->assertSee('Estrategia Comercial &amp; Desarrollo de Negocio', false);
        $response->assertSee('https://www.linkedin.com/in/javiercuervas/');
    }
}
