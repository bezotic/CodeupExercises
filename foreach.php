<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $item) {
	if(is_scalar($item)) {
		echo "$item\n";	
	} elseif(is_null($item)) {

	} elseif(is_array($item)) {
		
	 foreach($item as $innerItem) {
		echo "$innerItem\n";
}
	}
}

	
















