<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_login_from()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Willy Wonka',
            'email' => 'willy@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Pedro Lopez',
            'email' => 'pedro@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }
}
