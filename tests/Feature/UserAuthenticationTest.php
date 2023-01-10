<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Database\Factories\UserFactory;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserAuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_auth()
    {
        //$user =  UserFactory::factory()->create();

        // $user = new UserFactory();
        // $user = $user->makeOne([
        //     'name' => "aa",
        //     'email' => 'ss',
        //     'email_verified_at' => now(),
        //     'cpf' => 'teste',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ])->create();


        // $this->actingAs($user)
        //       ->post('/login')
        //       ->assertStatus(200);

        /*$dados =
        [
            'name' => 'Teste12ssss3',
            'cpf'=> '123456768986565',
            'email'=> 'RuanFelipe@Teasf.com',
            'senha'=> '9536268087',
        ];
        $response = $this->post('/register', $dados)->assertRedirect('/home');
*/


                User::factory(10)->create();
                $user =  User::orderBy('id')->first();
                // $user = User::find(3);
                $response = $this->actingAs($user)
                ->get('/home');

                $response->assertSuccessful();
    }

}
