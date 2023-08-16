<?php

$host = 'localhost';
$dbname = 'signup-db';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = newPDO("mysql:host=$host; dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}