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
    public function testExample()
    {
        User::factory(10)->create();
        $this->browse(function ($browser) {
            $browser->loginAs(User::find(1))
                  ->visit('/home');
        });
    }
}
