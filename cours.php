<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <h1>ceci est écrit en html</h1>
    <h2>  <?php echo "ceci est écrit en php <br>";
                print "ceci est afficher par print";
     ?></h2>
    <?php

?>
<!--

//comprendre les fuction et ses paramètres
  function bonjour($prenom){
    echo "bonjour $prenom <br>";
  }
  bonjour('abdul');
  bonjour('angela');


  function multiple($a,$b){
    echo $a*$b;
  }
  function multiple2($x,$y){
    $z=$x*$y;
    return $z;
  }
  multiple(10,5);
  $resulta= multiple2(2,10);
  echo '<br>'.$resulta;


  $x=10;
  function test(){
    global $x;//le mot golbal va prendre en compt la valeur de variable x
    $x = $x*3;
  }
  test();
  echo $x;

//comprendre la portée des variables (global et static)
  function test1(){
    $x=0;
    echo $x.'<br>';
    $x ++;
  }

  function test2(){
  static $y=0; // la valeur de variable est concervier et il va incrementer
    echo $y.'<br>';
    $y ++;
  }
  test1();
    test1();
      test1();
        test2();
          test2();
            test2();

//comprendre les constantes en php
define('BONJOUR', 'Bonjour à tous !');//c'est une constante je peux l'appeller où je veux
define('COUCOU', 'Ceci est un test constante');
echo COUCOU.'<br>';
function affiConst(){
  echo BONJOUR;
}
affiConst();*/
//constante magic
/*
Quelques constantes PHP magiques Nom 	Description
__LINE__ 	La ligne courante dans le fichier.
__FILE__ 	Le chemin complet et le nom du fichier courant avec les liens symboliques résolus. Si utilisé pour une inclusion, le nom du fichier inclus est retourné.
__DIR__ 	Le dossier du fichier. Si utilisé dans une inclusion, le dossier du fichier inclus sera retourné. C'est l'équivalent de dirname(__FILE__). Ce nom de dossier ne contiendra pas de slash final, sauf si c'est le dossier racine.
__FUNCTION__ 	Le nom de la fonction.
__CLASS__ 	Le nom de la classe courante. Le nom de la classe contient l'espace de nom dans lequel cette classe a été déclarée (i.e. Foo\Bar). Notez que depuis PHP 5.4, __CLASS__ fonctionne aussi dans les traits. Lorsqu'elle est utilisée dans une méthode de trait, __CLASS__ est le nom de la classe dans laquelle le trait est utilisé.
__TRAIT__ 	Le nom du trait. Le nom du trait inclut l'espace de nom dans lequel il a été déclaré (e.g. Foo\Bar).
__METHOD__ 	Le nom de la méthode courante.
__NAMESPACE__ 	Le nom de l'espace de noms courant.


echo __LINE__ .'<br>';
echo __FILE__ .'<br>';
echo __DIR__ .'<br>';
echo __LINE__ . '<br>';

function bonjour(){
echo __FUNCTION__ .'<br>';
}
bonjour();


//Variables tableau et tableaux numérotés ou indxier par php
$prenoms= array('Jouan', 'Dylan', 'Rawshen');
echo $prenoms[0]."<br>";//returner la valeur stoker dans 0
echo "nombre des prenoms stoké est:".count($prenoms). "<br>";//returner le nombre des valeurs
$taille = count($prenoms);//stoker la taille de tableau dans variable
for ($i=0; $i <$taille ; $i++) {
  echo $prenoms[$i].'<br>';
}
$fruits[0]= 'Pomme';
$fruits[1]='Banane';
$fruits[2]='Poire';
echo $fruits[2]."<br>";
echo "nombre des fruits stoké est:".count($fruits). "<br>";
foreach ($fruits as $value) {
  echo $value.'<br>';
}


//Les tableaux associatifs en PHP
  $age= array('Jouan' => 13, 'Dylan'=> 10, 'Rawshen' => 7);
  echo "Jouan a ". $age['Jouan']."ans <br>";
foreach ($age as $index => $value) {
  echo $index.' a '.$value .' ans <br>';
}

  $sports['Jouan']='jeux védios';
  $sports['Dylan']='footbal';
  $sports['Rawshen']='regarder la TV';
  echo "le sport préfer de Rawshen est:" .$sports['Rawshen']."<br>";
  foreach ($sports as $sport) {
    echo $sport.'<br>';
  }


  //Les tableaux multidimensionnels en PHP
  $insecrits= array(
              array('Jouan', 13, 'jouan@yahoo.fr'),
              array('Dylan', 10, 'dylan@yahoo.fr'),
              array('Rawshen', 7, 'rawshen@yahoo.fr')
  );
  echo "<pre>";// afficher les résultats avec <pre>
  print_r ($insecrits);
  echo "</pre>";

  for ($i=0; $i < 3; $i++) {//afficher le contenu du tableau avec boucle for
    $n= $i +1;
    echo "membre n°:".$n."<br> <ul>";
    for ($j=0; $j <3 ; $j++) {
    echo "<li>". $insecrits [$i] [$j]."</li>";
    }
    echo "</ul>";
  }


  // Dates et timestamp en PHP
  echo time();//afficher les seconde couller depuis 01/01/2017
  $stm= strtotime('2016/02/05');
  echo "<br> les secondes au 05/02/2016 étaient:". $stm;
  //Obtenir et formater une date
    echo "Nous sommes le: ".date('d/m/y')."<br>";
    echo "Nous sommes le: ".date('y/m/d')."<br>";
    echo date('l d').'<br>';
    echo date('d-m-y H:i:s').'<br>';
   ?>
   //Tester la validité d'une date
   echo "La date valide est :";
   var_dump (checkdate(9,28,2015));
   echo "<br>";
   echo "La date valide est :";
   var_dump (checkdate(2,30,2015));
   echo "<br>";
   echo "La date valide est :";
   var_dump (checkdate(2,9,2017));
   echo "<br>";

   // Lire, ouvrir, fermer un fichier en PHP
   $ficherR= fopen('test.txt','r');
   echo "<pre>";
   echo fread($ficherR, filesize('test.txt'));
   echo "</pre>";
   fclose($ficherR);

   //Parcourir un fichier en PHP
   $ficherR= fopen('test.txt','r');
   echo "<pre>";
   while (!feof($ficherR)) {
     echo fgets($ficherR, filesize('test.txt')); //lire le fichier line par line
   }
   //echo fgets($ficherR, filesize('test.txt')); pour lire une seul line
   //echo fgets($ficherR, filesize('test.txt'));

   //echo fgetc($ficherR);  pour afficher un caractère
   echo "</pre>";
   fclose($ficherR);
*/-->
  </body>
</html>
