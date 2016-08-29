<?php
echo "hello";
$donnees = array(2,8,9,4,7,3,5,0,1,6); 

function tri_sort($donnees){
	$donnees_lenght=count($donnees);
	for ($i=0; $donnees_lenght; $i++) { 
		for ($j=0; $j<$donnees_length-1-$i; $j++) {
			if ($donnees[$j+1] < $donnees[$j]) {
               $donnees = swappositions($donnees, $j, $j+1);
           }
	}
}
	 return $donnees;
}
	$donnees = tri_sort($donnees);
	print_r($donnees)

	function swappositions($donnees, $left, $right) {
   $backup_old_donnees_right_value = $donnees[$right];
   $donnees[$right] = $donnees[$left];
   $donnees[$left] = $backup_old_donnees_right_value;
   return $donneesk;
}


?>
