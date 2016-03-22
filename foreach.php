<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing) {
	if(is_scalar($thing)) {
		echo $thing .PHP_EOL;
	} 
	//checks if null
	elseif(is_null($thing)) {

	}
	//checks if array
	elseif(is_array($thing)) {
		// loops through away to put out the inner info
		foreach($thing as $innerThings) {
			echo $innerThings .PHP_EOL;
		}
	}
	




}













