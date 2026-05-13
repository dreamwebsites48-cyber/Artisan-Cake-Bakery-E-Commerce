<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Set your database password here
$dbname = 'artisan_cake_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // For demo purposes, we won't stop execution entirely if DB fails, to allow UI preview
    // die("Database Connection Failed: " . $e->getMessage());
    $db_error = true;
}

session_start();
?>
