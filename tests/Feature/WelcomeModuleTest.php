<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_welcome()
    {
        $this->get('/admin/home')
            ->assertStatus(200)
            ->assertSee('INICIO en el lado del administrador.');
    }

    public function test_welcome_name()
    {
        $this->get('/admin/abraham')
            ->assertStatus(200)
            ->assertSee('Mi nombre es Abraham');
    }

    public function test_welcome_name_nickname()
    {
        $this->get('/admin/abraham/yoel')
            ->assertStatus(200)
            ->assertSee('Mi nombre es Abraham y mi apodo es yoel');
    }
}
