<?php

namespace Tests\Feature;

use App\Models\BankAccount;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class BankTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_user_account()
    {
        $user = User::create([
            'name' => 'RuanTeste',
            'email' => 'Ruan@teste.gmaohdjhdkddhkd',
            'email_verified_at' => now(),
            'cpf' => '09876543216',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $conta = BankAccount::create([
            'counts' => '2023'.rand(10000,99999),
            'balance' => 0,
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseHas('users', ['name' => 'RuanTeste']);
        $this->assertDatabaseHas('bank_accounts', ['user_id' => $user->id]);



    }
}
