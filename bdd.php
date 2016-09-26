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

		$insertion= "INSERT INTO visiteur (nom, prenom, mail)  VALUES('RASHO', 'Abdul', 'ab_rasho@yahoo.fr'),
		('SAGE', 'Jean', 'abffa@yahoo.fr')";

		$connexion->exec($insertion);
		
		echo ' table visiteur créé!';
	}


	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	} 
 	
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

	-->
</body>
</html>