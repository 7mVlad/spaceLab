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
    public function addUser(string $name, string $email, string $password) {
        $query = "INSERT INTO Users (name, email, password) VALUES ('$name','$email','$password')";
        mysqli_query($this->db, $query);
    }

    // изменение данных пользователя
    public function updateUser(string $name, string $email, string $password, string $condition) {
        $query = "UPDATE Users SET name='$name', email='$email', password='$password' WHERE $condition";
        mysqli_query($this->db, $query);
    }

    // удаление пользователя
    public function deleteUser(string $condition) {
        $query = "DELETE FROM Users WHERE $condition";
        mysqli_query($this->db, $query);
    }
}

