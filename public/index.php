<?php
include (__DIR__ . '/views/register.php');


register();

// Anropa functionen för att hantera create user:
// handleCreateUser();

// include (__DIR__ . '/models/user.php');


// createUser('David', 'hej');


// MVC - Model View Controller
// Model - Ett objekt för varje modell
// Controller - spindeln i nätet!
// vill jag registrera mig på en site, så är controllern den som anropar
// functionen i modelen, och sen skicka tillbaka ett svar till användaren

// I index finns ofta en router (?) som skickar vidare koden till olika controllers

// MVC exempel när en användare registrerar sig på en html-sida:
// 1. Användaren skickar användarnamn och löserord till servern. localhost/create-user
// 2. Router i index.php tar emot requesten 
// 3. Routern skickar vidare till en controller
// 4. Controllern anropar model create user
// 5. Controllern ger sen tillbaka ett svar till användaren genom att anropa en view

// (En view kan t.ex. vara html; "grattis du är registrerad på sidan"

// Vi skippar router nu, vi kommer att få det gratis sen när vi använder ramverk (laravel t.ex.)
// Enda uppgiften för routern: mappa URL till en controller funktion

// Uppgift: 
// 1. skapa en todo model för create todo (ledtråd: INSERT)
// 2. skapa en todo - controller - handleCreateTodo($_POST['text'] user_id)




?>
