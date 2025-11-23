<?php
ini_set('error_reporting', E_ALL);
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Thuy Ngan test merge pull request 
$dbhost = 'localhost';
$dbname = 'ecommerceweb';
$dbuser = 'root';
$dbpass = '';

define("BASE_URL", "");
define("ADMIN_URL", BASE_URL . "admin/");

try {
    $pdo = new PDO("mysql:host={$dbhost};port=3306;dbname={$dbname};charset=utf8mb4", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
?>
