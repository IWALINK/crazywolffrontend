<?php

// $host = 'db';
// $db   = 'mingxuang';
// $user = 'mingxuang';
// $pass = 'mingxuang';
// $charset = 'utf8mb4';
// $port = 3306;


// $host = 'gondola.proxy.rlwy.net:4045';
// $db   = 'railway';
// $user = 'root';
// $pass = 'wEhVJyJXuFWdANRNCZgnYJvEHZazehBN';
// $charset = 'utf8mb4';
// $port = 3306;

// $dsn = "mysql:host=$host;port=$port;dbname=$db";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];

// try {
//     $pdo = new PDO($dsn, $user, $pass, $options);
// } catch (PDOException $e) {
//     throw new PDOException($e->getMessage(), (int)$e->getCode());
// }

$host = '213.200.245.249';  // ou 'localhost'  213.200.245.249

$db   = 'laravel';    // correspond à MYSQL_DATABASE
$user = 'laravel';    // correspond à MYSQL_USER
$pass = 'laravel';     // correspond à MYSQL_PASSWORD
$charset = 'utf8mb4';
$port = 3306;         // ✅ Maintenant c'est le bon port

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
   // echo "Connected successfully to Docker MySQL!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}