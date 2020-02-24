<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class UsersModuleTest extends TestCase
{
    /** @test */
    function it_show_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Javi',
        ]);

        factory(User::class)->create([
            'name' => 'Andres',
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Javi')
            ->assertSee('Andres');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        DB::table('users')->truncate();

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
