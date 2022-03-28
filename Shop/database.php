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
    $db = new PDO("mysql:host = $host; dbname=$name", $user, $pass);

}
catch(PDOException $e) {
    echo "Произошла ошибка подключения" . $e->getMessage();
}