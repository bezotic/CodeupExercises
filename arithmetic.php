<?php


function throwErrorMessage($a, $b, $divide = true) {
	if ($divide == false) {
		echo "You cannot divide by zero" .PHP_EOL;
		return false;
	} 

	if (is_numeric($a)&& is_numeric($b)) {
		return $a + $b;
    } else {
    	echo "Error! {$a} and {$b} must be numbers" .PHP_EOL;
	  }

}

function add($a, $b){ 
	(throwErrorMessage($a, $b));
	   return $a + $b;	     
}
	echo add(1, 2) .PHP_EOL;


function subtract($a, $b) {
	 (throwErrorMessage($a, $b));
		return $a - $b; 
}
	echo subtract(a, 2) .PHP_EOL;


function multiply($a, $b) {
 	 (throwErrorMessage($a, $b));
 		return $a * $b;   
}
	echo multiply(5, 5) .PHP_EOL;


function divide($a, $b){
	 (throwErrorMessage($a, $b, $b == true));
		return $a / $b;  
}
	echo divide(10,0) .PHP_EOL;



function modulus($a, $b) {
	 (throwErrorMessage($a, $b));
		return $a % $b;
}
	echo modulus(10,2) .PHP_EOL;
	echo modulus(10,3) .PHP_EOL;


