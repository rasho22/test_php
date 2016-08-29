<?php

// Connexion à la base de données

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'Abdul', 'facesimplon');
echo "vous êtes connecté";
}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO message (pseudo, message) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));

$req->execute("toto", "C'est mon message");

//print_r($_POST);
// Redirection du visiteur vers la page du minichat

header('Location: minichat.php');
?>