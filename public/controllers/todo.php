<?php
include_once (__DIR__ . '/../models/todo.php');

function handleCreateTodo($text, $user_id) {
    $text = $_POST['text'];
    $user_id = $_SESSION['user_id'];

    // anropa funktioen från user.php i models
    createTodo($user_id, $text);
    // skicka tillbaka html för att visa att det gick bra från views mappen
    showTodoCreatedView();
}

?>