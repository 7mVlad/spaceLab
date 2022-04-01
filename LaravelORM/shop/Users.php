<?php

namespace database;

use database\User as DatabaseUser;

require_once 'database.php';

class User {

    private $db;

    // добавление БД
    public function __construct($db) {
        $this->db = $db;
    }

    // добавление пользователя
    public function addUser(string $name, string $email, string $password) {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
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

$user = new DatabaseUser($db);
$user->addUser('user_test','test@example.com', '1234');
