<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DuskRegisterUserTest extends DuskTestCase
{

  use DatabaseTransactions;

    public function testCheck_register_is_sucess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'RuanFelipe')
                ->type('cpf', '00000236711')
                ->type('email', 'Ruaddddsssn@aaaaaaattretxxxxeetete')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('Registrar')
                ->assertPathIs('/home')
                ->assertSee('Dashboard');


        });
    }
}
