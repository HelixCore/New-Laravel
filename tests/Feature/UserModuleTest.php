<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test Solo Una Prueba a la Vez
     * Colocarlos Todos Juntos
     * Super Chimbo
     */
    function Example(){
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('usuarios');

        $this->get('/usuarios/5')
             -> assertStatus(200)
             -> assertSee('Hola usuario 5');

        $this->get('/usuarios/Nuevo')
             -> assertStatus(200)
             -> assertSee('welcome');
    }
}

