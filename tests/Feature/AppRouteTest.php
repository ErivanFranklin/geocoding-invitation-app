<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_home_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_invite_route()
    {
        $response = $this->get('/invite');

        $response->assertStatus(200);
    }
}
