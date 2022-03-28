<?php

namespace database;

use PDO;
use PDOException;

// Подключение БД

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'shop';

// $db = mysqli_connect($host, $user, $pass, $name);

try {
    $database = new PDO("mysql:host = $host; dbname=shop", $user, $pass);

    $sql = "CREATE DATABASE test";
    $database->exec($sql);
}
catch(PDOException $e) {
    echo "Ошибка" . $e->getMessage();
}