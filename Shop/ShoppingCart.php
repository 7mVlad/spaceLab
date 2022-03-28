<?php

require_once "database.php";

class Cart {

    private $db; 
 
    // добавление БД
    public function __construct($db) {
        $this->db = $db;
    }
    
    // добавление в корзину
    public function addProductCart(string $id, int $amount) {
        $query = "INSERT INTO ShoppingCart (id_product, amount) VALUES ('$id', '$amount')";
        mysqli_query($this->db, $query);
    }
    
    // удаление с корзины
    public function deleteProductCart(string $id) {
        $query = "DELETE FROM ShoppingCart WHERE $id";
        mysqli_query($this->db, $query);
    }

}

$query = "SELECT id FROM Product";
$result = mysqli_query($db, $query);
for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$cart = new Cart($db);
$cart->addProductCart($data[0]['id'], 2);