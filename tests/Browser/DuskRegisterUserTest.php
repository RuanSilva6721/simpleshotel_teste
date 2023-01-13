<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DuskRegisterUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCheck_register_is_sucess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'RuanFelipe')
                ->type('cpf', '61094236711')
                ->type('email', 'Ruasssn@aaaaaaattreteteetete')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('Registrar')
                ->assertPathIs('/home')
                ->assertSee('Dashboard');


        });
    }
}
