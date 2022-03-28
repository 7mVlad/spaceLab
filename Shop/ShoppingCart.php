<?php

require_once "database.php";

class ShoppingCart {

    private $db; 
 
    // добавление БД
    public function __construct($db) {
        $this->db = $db;
    }
    
    // добавление в корзину
    public function addCart(int $idUser, int $idProduct, int $amount) {
        $sql = "INSERT INTO shopping_cart (id_user, id_product, amount) VALUES ('$idUser', '$idProduct', '$amount')";
        $this->db->exec($sql);
    }

    public function updateCart(int $idUser, int $idProduct, int $amount, string $condition) {
        $sql = "UPDATE shopping_cart SET id_user='$idUser', id_product='$idProduct', amount='$amount' WHERE $condition";
        $this->db->exec($sql);
    }
    
    // удаление с корзины
    public function deleteCart(string $id) {
        $sql = "DELETE FROM shopping_cart WHERE $id";
        $this->db->exec($sql);
    }

}

