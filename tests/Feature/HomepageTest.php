<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageTest extends TestCase
{
    public function test_homepage_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Evolusi PL');
        $response->assertSee('About This Project');
    }
}