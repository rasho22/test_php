<!DOCTYPE html>
<html>
<head>
	<title>php</title>
	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 	<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>
	<h1>Teste php</h1>
	<?php include("navbar.php")
	 ?>

	 <?php

// Enregistrons les informations de date dans des variables


$jour = date('d');

$mois = date('m');

$annee = date('Y');


$heure = date('H');

$minute = date('i');


// Maintenant on peut afficher ce qu'on a recueilli

echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;

?>

	<?php

// On crée notre array $prenoms

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');


// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)

{

    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

}

?>
<?php 
echo "ceci est un teste php!!!!". '<br />';
?>

<?php

$coordonnees = array (

    'prenom' => 'François',

    'nom' => 'Dupont',

    'adresse' => '3 Rue du Paradis',

    'ville' => 'Marseille');


if (array_key_exists('nom', $coordonnees))

{

    echo 'La clé "nom" se trouve dans les coordonnées !' . '<br/>';

}


if (array_key_exists('pays', $coordonnees))

{

    echo 'La clé "pays" se trouve dans les coordonnées !' . '<br/>';

}


?>


</body>
</html>