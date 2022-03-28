<?php

namespace database;

require_once 'database.php';

class Product {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addProduct(string $title, string $description, int $price) {
        $query = "INSERT INTO Product (title, description, price) VALUES ('$title','$description','$price')";
        mysqli_query($this->db, $query);
    }

    public function updateProduct(string $title, string $description, int $price, string $condition) {
        $query = "UPDATE Product SET title='$title', description='$description', price='$price' WHERE $condition";
        mysqli_query($this->db, $query);
    }

    public function deleteProduct (string $condition) {
        $query = "DELETE FROM Product WHERE $condition";
        mysqli_query($this->db, $query);
    }
}

