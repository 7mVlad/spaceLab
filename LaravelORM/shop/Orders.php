<?php


namespace database;

require_once 'database.php';

class Orders {

    private $db;

    // добавление БД
    public function __construct($db) {
        $this->db = $db;
    }

    // добавление заказа
    public function addOrder(int $idUser, int $idProduct, int $amount, string $address, int $phone) {
        $sql = "INSERT INTO orders (id_user, id_product, amount, address, phone) VALUES ('$idUser','$idProduct', '$amount', '$address', '$phone')";
        $this->db->exec($sql);
    }

    // изменение заказа
    public function updateOrder(int $idUser, int $idProduct, int $amount, string $address, int $phone, string $condition) {
        $sql = "UPDATE orders SET id_user='$idUser', id_product='$idProduct', amount='$amount', address='$address', phone='$phone' WHERE $condition";
        $this->db->exec($sql);
    }

    // удаление заказа
    public function deleteOrder(string $condition) {
        $sql = "DELETE FROM orders WHERE $condition";
        $this->db->exec($sql);
    }
}

