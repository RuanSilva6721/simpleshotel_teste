<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_view_have_the_words()
    {

            $response = $this->get('/register');
            $response->assertSeeText('Cpf');
            $response->assertSeeText('Nome');
            $response->assertSeeText('Senha');
            $response->assertSeeText('E-Mail');

    }
}
