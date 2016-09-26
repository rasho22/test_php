<!Doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once('visiteur.class.php');

		$visiteur1 = new Visiteur;
		//$visiteur2 = new Visiteur;

		$visiteur1-> set_prenom('Abdul');
		$visiteur1-> set_nom('RASHO');
		echo 'votre nom: ' .$visiteur1 ->nom;
		echo 'et prenom: ' .$visiteur1 ->prenom;

		//$visiteur2-> set_prenom('Angela');

		//echo 'Bonsoir '.$visiteur1->get_prenom(). '<br/>';
		//echo 'Bonsoir '.$visiteur2->get_prenom(). '<br/>';

	?>

</body>
</html>