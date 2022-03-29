<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        dump($orders);
    }

    public function create() {
        Order::create([
            'id_user' => '1',
            'id_product' => '2',
            'amount' => '5',
            'address' => 'addres_test',
            'phone' => '4578'
        ]);
    }

    public function update() {

        $order = Order::find(1);
        $order->update([
            'id_user' => '1',
            'id_product' => '2',
            'amount' => '5',
            'address' => 'update_addres_test',
            'phone' => '4578'
        ]);
    }

    public function delete() {

        $order = Order::find(1);
        $order->delete();

        // Восстановление
        // $orderRestore = Order::withTrashed()->find(1);
        // $orderRestore->restore();
    }
}
