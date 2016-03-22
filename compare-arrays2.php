<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($value, $array) {
		// searching through array
		$names = array_search($value, $array);
		if($names === false) {
			return "FALSE\n";
		} else {
			return "TRUE\n";
		}
}

	


echo isInArray('Tina', $names);
echo isInArray('Bob', $names);


function compareArrays($array1, $array2) {
	$nameCounter = 0;
	foreach($array1 as $key =>$value) {
		$result = array_search($value, $array2);
		if ($result !== false) {
			$nameCounter ++;
		}
	}
	return "The number of matches is {$nameCounter}";

}
	

echo compareArrays($compare, $names) . PHP_EOL;



function combineArrays($array1, $array2) {
$array3 = [];
	foreach($array1 as $key => $value){
		if ($array1[$key] === $array2[$key]) {
			$array3[] = $array2[$key];
		} else {
			$array3[] = $array1[$key];
			$array3[] = $array2[$key];
		}
	}
	return $array3;
}


print_r(combineArrays($names, $compare));