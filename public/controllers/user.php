<?php
include_once (__DIR__ . '/../models/user.php');
include_once (__DIR__ . '/../views/user-created.php');

function handleCreateUser() {
    // Låtsas att vi har routat... tar in info från form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // anropa funktioen från user.php i models
    createUser($username, $password);
    // skicka tillbaka html för att visa att det gick bra från views mappen
    showUserCreatedView();
}

?>