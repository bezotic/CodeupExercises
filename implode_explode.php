 <?php

 
 	


 

 // List of famous peeps

 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 $physicistsArray = explode(', ', $physicistsString);

	





 

 

// Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 	$tony = array_pop($array);
 	$allButTony = implode(' ,', $array);
 	$allTogetherNow = $allButTony . 'and '. $tony;
 	return "Famous fake engineers are {$allTogetherNow} ";

 }
 	
print_r(humanizedList($physicistsArray));