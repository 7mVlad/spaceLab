<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertNan;
use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase {

    public function testAuthorization() {

        $this->assertDatabaseHas('users', [
                'email' => 'test@example.com',
                'password' => '1234'
            ]);
    }

    public function testUserController() {

        $response = $this->get('/users');
        $response->assertStatus(200);
    }

    public function testCreateUser() {

        $user = new UserController();
        $user->create();
        assertTrue(true);
    }

    public function testUpdateUser() {

        $user = new UserController();
        $user->update();
        assertTrue(true);
    }


}
