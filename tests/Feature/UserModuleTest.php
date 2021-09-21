<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    public function test_user_list()
    {
        $this->get('/admin/users')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    public function test_user_new()
    {
        $this->get('/admin/user/new')
            ->assertStatus(200)
            ->assertSee('Nuevo usuario');
    }
}
