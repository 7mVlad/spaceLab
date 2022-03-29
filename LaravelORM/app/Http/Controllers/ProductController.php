<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        foreach($products as $product) {
            dump($product->title);
        }
    }

    public function create() {
        Product::create([
            'title' => 'titleProduct',
            'description' => 'Description product test',
            'price' => '50'
        ]);
    }

    public function update() {

        $product = Product::find(1);
        $product->update([
            'title' => 'updateProduct',
            'description' => 'Description product update',
            'price' => '14'
        ]);
    }

    public function delete() {

        $product = Product::find(1);
        $product->delete();

        // Восстановление
        // $productRestore = Product::withTrashed()->find(1);
        // $productRestore->restore();
    }
}
