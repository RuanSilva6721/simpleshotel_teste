<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DuskDepositTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCheck_deposit_is_suces()
    {
        User::factory(10)->create();
        $this->browse(function ($browser) {
            $browser->loginAs(User::first())
                  ->visit('/home/bank/depositar')
                  ->type('MoneyDeposit', 30)
                  ->press('Depositar')
                  ->assertPathIs('/home');
        });
    }
}
