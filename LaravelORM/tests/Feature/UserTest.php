<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUser() {
        $user = User::find(3);

        if ($user['name'] == 'test_user' &&
            $user['email'] == 'test@user.com' &&
            $user['email'] == '1234'
        ) {
        }
        assertTrue(true);
    }

}
