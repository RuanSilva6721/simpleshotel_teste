<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    public function test_check_if_columns_is_correct()
    {
        $user = new User();

        $expected =[
            'name',
            'email',
            'cpf',
            'password',
        ];
        $arrayCompared = array_diff($expected, $user->getFillable());
        $this->assertEquals(0, count($arrayCompared));

    }
}
