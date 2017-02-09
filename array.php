
<form action="array.php" method="post">

        <p>

        <label for="name">nome de fruit:</label> : <input type="text" name="name" /><br />

        <label for="prix">prix</label> :  <input type="text" name="prix"  /><br />


        <input type="submit" value="Envoyer" />

    </p>

    </form>

<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Rawshen2010&');

}

catch(Exception $e)

{
    echo "echec de connexion";
        die('Erreur : '.$e->getMessage());

}
/*UPPER :convertir en majuscules, LOWER : écrit en minuscules, LENGTH : compter le nombre de caractères
AVG calculer la moyenne, ROUND : arrondir un nombre décimal, SUM : additionner les valeurs, MAX : retourner la valeur maximale ,MIN : retourner la valeur minimale,

*/
$reponse = $bdd->query('SELECT UPPER(name) AS test FROM produits');


while ($donnees = $reponse->fetch())


{

    echo $donnees['test'] . '<br />';

}


$reponse->closeCursor();


$req = $bdd->prepare('INSERT INTO produits(name, prix) VALUES(?, ?)');
$req->execute(array($_POST['name'], $_POST['prix']));



/*
      $reponse = $bdd->query('SELECT name, prix FROM produits ORDER BY id');

      while ($donnees = $reponse->fetch())

{

    echo '<p><strong>' . htmlspecialchars($donnees['name']) . '</strong> : ' . htmlspecialchars($donnees['prix']) . '</p>';
}


$reponse->closeCursor();*/


?>
