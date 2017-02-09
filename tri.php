<?php

$donnees = array(8,4,1,9,5,7,3,2,6,0);

function trisort($donnees) {
   $donnees_length = count($donnees);
   for ($i=0; $i<$donnees_length; $i++) {
   		for ($j=0; $j < $donnees_length -1-$i; $j++) {
   			if ($donnees[$j+1] < $donnees[$j]) {
   				 $donnees = changepositions($donnees, $j, $j+1);

   				}
   			}
   		}
   		return $donnees;
   }
   	$donnees = trisort($donnees);
	print_r($donnees);

function changepositions($donnees, $left, $right) {
   $backup_old_donnees_right_value = $donnees[$right];
   $donnees[$right] = $donnees[$left];
   $donnees[$left] = $backup_old_donnes_right_value;
   return $donnees;
}


?>
