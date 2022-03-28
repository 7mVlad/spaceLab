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
        $query = "INSERT INTO Orders (id_user, id_product, amount, address, phone) VALUES ('$idUser','$idProduct', '$amount', '$address', '$phone')";
        mysqli_query($this->db, $query);
    }

    // изменение заказа
    public function updateOrder(int $idUser, int $idProduct, int $amount, string $address, int $phone, string $condition) {
        $query = "UPDATE Orders SET id_user='$idUser', id_product='$idProduct', amount='$amount', address='$address', phone='$phone' WHERE $condition";
        mysqli_query($this->db, $query);
    }

    // удаление заказа
    public function deleteOrder(string $condition) {
        $query = "DELETE FROM Orders WHERE $condition";
        mysqli_query($this->db, $query);
    }
}
