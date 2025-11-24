<?php

$host  = "localhost";
$dbname = 'users';
$dbusername = "root";
$dbpassword = "";

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}