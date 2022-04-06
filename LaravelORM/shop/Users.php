<?php

namespace database;


require_once 'database.php';

class User {

    private $db;

    // добавление БД
    public function __construct($db) {
        $this->db = $db;
    }

    // добавление пользователя
    public function addUser(int $id, string $name, string $email, string $password) {
        $sql = "INSERT INTO users (id, name, email, password) VALUES ('$id', '$name', '$email', '$password')";
        $this->db->exec($sql);
    }

    // изменение данных пользователя
    public function updateUser(string $name, string $email, string $password, string $condition) {
        $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE $condition";
        $this->db->exec($sql);
    }

    // удаление пользователя
    public function deleteUser(string $condition) {
        $sql = "DELETE FROM users WHERE $condition";
        $this->db->exec($sql);
    }
}

$user = new User($db);
$user->addUser(3, 'test_user','test@user.com', '1234');
