<?php

// Connexion à la base de données

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Rawshen2010&');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO news (pseudo, message) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));

$req->execute("toto", "C'est mon message");

//print_r($_POST);
// Redirection du visiteur vers la page du minichat

header('Location: minichat.php');
?>