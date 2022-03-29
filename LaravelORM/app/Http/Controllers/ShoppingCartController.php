<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;


class ShoppingCartController extends Controller
{
    public function index() {
        $shoppingCart = ShoppingCart::all();
        dump($shoppingCart);
    }

    public function create() {
        ShoppingCart::create([
            'id_user' => '2',
            'id_product' => '2',
            'amount' => '3',
        ]);
    }

    public function update() {

        $shoppingCart = ShoppingCart::find(1);
        $shoppingCart->update([
            'id_user' => '2',
            'id_product' => '2',
            'amount' => '5',
        ]);
    }

    public function delete() {

        $shoppingCart = ShoppingCart::find(1);
        $shoppingCart->delete();

        // Восстановление
        // $orderRestore = Order::withTrashed()->find(1);
        // $orderRestore->restore();
    }
}
