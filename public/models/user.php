<?php
include (__DIR__ . '/../db.php');

// CRUD i varje model-fil

// Create:
function createUser($name, $password)
{
    $pdo = connectDB();
    $sql = "INSERT INTO users (username, password) VALUES (:name, :pass)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'pass' => $password]);
}
