<?php

function register() 
{
?>
    <h1>Skapa en användare</h1>
    <form method="POST" action="create-user.php">
        <label for="username">Användarnan:</label>
        <input type="text" name="username" id="username">
        <label for="password">Lösenord:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Skicka!</button>
    </form>
<?php
}
?>