<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UsersModuleTest extends TestCase
{

   use RefreshDatabase;

    /** @test */
    function it_show_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Javi'
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


        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    /** @test */
    function it_displays_the_users_details()
    {
        $user = factory(User::class)->create([
            'name' => 'Alfredo Bartolote'
        ]);
        $this->get('/usuarios/'.$user->id)
            ->assertStatus(200)
            ->assertSee('Alfredo Bartolote');
    }

    /** @test */
    function it_displays_a_404_error_if_the_user_is_not_found()
    {
        $this->get('/usuarios/999')
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }

    /** @test */
    
    function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();

        $this->post('/usuarios/', [
            'name' => 'Antonio',
            'email' => 'antonio@antonio.es',
            'password' => '123456'
        ])->assertRedirect('usuarios');

        $this->assertCredentials([
            'name' => 'Antonio',
            'email' => 'antonio@antonio.es',
            'password' => '123456',
        ]);
    }
}
