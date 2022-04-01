<?php

namespace database;

require_once 'database.php';

class Product {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addProduct(string $title, string $description, int $price) {
        $sql = "INSERT INTO products (title, description, price) VALUES ('$title','$description','$price')";
        $this->db->exec($sql);
    }

    public function updateProduct(string $title, string $description, int $price, string $condition) {
        $sql = "UPDATE products SET title='$title', description='$description', price='$price' WHERE $condition";
        $this->db->exec($sql);
    }

    public function deleteProduct (string $condition) {
        $sql = "DELETE FROM products WHERE $condition";
        $this->db->exec($sql);
    }
}

$product = new Product($db);
$product->deleteProduct('id=2');

