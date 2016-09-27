<!DOCTYPE html>
<html>
<head>
	<title>PDD</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
		$serveur = "localhost";
		$usr = "Abdul";
 		$psw = "facesimplon";

 		try{

		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$usr,$psw);
		$connexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






		}
		catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	} 

	/*
	modifier et suprimer des données:
	// $suprim="DROP TABLE visiteur"; //suprimer un tableau

		//$suprim="ALTER TABLE visiteur DROP sexe"; //suprimer colone sexe
		//$modif="UPDATE visiteur SET age=12 WHERE id=1"; //pour modifier l'élément avec id =1
		$requete=$connexion->prepare($suprim);
		$requete->execute(); 
		echo "colone sese suprimé";

	$suprim="DELETE FROM visiteur WHERE id=5";   //suprimer un élément
		//$modif="UPDATE visiteur SET age=12 WHERE id=1"; //pour modifier l'élément avec id =1
		$requete=$connexion->prepare($suprim);
		$requete->execute(); 
		echo "info mis à jour";

/* sélectionner un élement dans bd:
		
		$requete= $connexion->prepare(" SELECT prenom FROM visiteur WHERE sexe='H'");
		$requete->execute(); 
		$resultat= $requete->fetchall();

		echo "<pre>";
			print_r($resultat);
		echo "</pre>";



		$requete= $connexion->prepare(" SELECT prenom FROM visiteur WHERE sexe='H'");
		$requete->execute(); 
		$resultat= $requete->fetchall();

		echo "<pre>";
			print_r($resultat);
		echo "</pre>";*/



		/* ajouter une colne dans un tableau
		$requete="ALTER TABLE visiteur ADD age INT(100)";
		$connexion->exec($requete);*/
/*
	sélectioner toutes les données dans le tableau:

		$requete= $connexion->prepare(" SELECT * FROM visiteur");
		$requete->execute(); 
		$resultat= $requete->fetchall();

		echo "<pre>";
			print_r($resultat);
		echo "</pre>";*/
	
 	
	?>


	<!-- se connecter à la base de données:
	$db_server = "localhost";
 	$db_usr = "Abdul";
 	$db_psw = "facesimplon";
 	$db_name = "testmixite";

	 try{
		$connexion = new PDO("mysql:host=$db_server;dbname=$db_name",$db_usr,$db_psw);
		$connexion ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		echo 'Connexion à la base de donnée réussie!';
	}
	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	} 



	-créer nouvelle base de donnée:
	$db_server = "localhost";
		$db_usr = "Abdul";
 		$db_psw = "facesimplon";

 		try{
		$connexion = new PDO("mysql:host=$db_server",$db_usr,$db_psw);
		$connexion ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connexion ->exec('CREATE DATABASE test2');
		
		echo ' base de donnée créée!';
	}


	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	}  


	$db_server = "localhost";
		$db_usr = "Abdul";
 		$db_psw = "facesimplon";

 		try{

		$connexion = new PDO("mysql:host=$db_server;dbname=test2",$db_usr,$db_psw);
		$connexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$codesql="CREATE TABLE visteur(
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nom VARCHAR (50),
			prenom VARCHAR (50),
			mail VARCHAR (50),

		)";

		$connexion->exec($codesql);
		
		echo ' table visiteur créé!';
	}


	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	} 


ajouter des données dans un tableau
$serveur = "localhost";
		$usr = "Abdul";
 		$psw = "facesimplon";

 		try{

		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$usr,$psw);
		$connexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$insertion= "INSERT INTO visiteur (nom, prenom, mail)  VALUES('RASHO', 'Abdul', 'ab_rasho@yahoo.fr'),
		('SAGE', 'Jean', 'abffa@yahoo.fr')";

		$connexion->exec($insertion);
		
		echo ' table visiteur créé!';
	}


	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	} 

	ajouter des données sécurisées:
	try{

		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$usr,$psw);
		$connexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$requete= $connexion->prepare(
			"INSERT INTO visiteur (nom, prenom, mail) 
			VALUES (:nom, :prenom, :mail)"
			);

		$requete->bindParam(':nom', $nom);
		$requete->bindParam(':prenom', $prenom);
		$requete->bindParam(':mail', $mail);

		$nom="toto";
		$prenom="titi";
		$mail="toto@yahoo.fr";
		$requete->execute();

		echo 'vous avez ajouter toto';
	}
		catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	}
	-->
</body>
</html>