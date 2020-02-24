<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/alfredo/barto')
            ->assertStatus(200)
            ->assertSee('Bienvenido Alfredo, tu apodo es barto');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/alfredo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Alfredo');
    }
}
