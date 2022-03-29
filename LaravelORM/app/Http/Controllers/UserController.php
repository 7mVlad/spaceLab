<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        foreach($users as $user) {
            dump($user->name);
        }
    }

    public function create() {
        User::create([
            'name' => 'user_1',
            'email' => 'user_1@user.com',
            'password' => 'jhajdfh'
        ]);
    }

    public function update() {

        $user = User::find(1);
        $user->update([
            'name' => 'update_user_1',
            'email' => 'update_user_1@user.com',
            'password' => 'jhajdfh'
        ]);
    }

    public function delete() {

        $user = User::find(1);
        $user->delete();

        // Восстановление
        // $userRestore = User::withTrashed()->find(1);
        // $userRestore->restore();
    }
}
