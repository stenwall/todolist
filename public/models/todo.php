<?php
include (__DIR__ . '/../db.php');

// CRUD i varje model-fil

// Create:
function createTodo($user_id, $text)
{
    $pdo = connectDB();
    $sql = "INSERT INTO todos (user_id, text, done) VALUES (:user_id, :text, :done)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $user_id, 'text' => $text, 'done' => 0]);
}
