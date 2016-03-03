<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($value, $array) {
	$name = array_search($value, $array);
	if ($name !== false) {
		return 'TRUE'.PHP_EOL;
	} else {
		return 'FALSE' .PHP_EOL;
	}
}

echo isInArray('Tina', $names);
echo isInArray('Bob', $names);


function compareArrays($array1, $array2) {
	$namesMessage = 0;
	foreach($array1 as $key => $value) {
		$check = array_search($value, $array2);
		if ($check !== false) {
			$namesMessage++;
		}
	}
	return "The number of matches is " . $namesMessage .PHP_EOL;
}

echo compareArrays($compare, $names) . PHP_EOL;


$fruits = [];

array_push($fruits, 'Runts');

array_push($fruits, 'bananas', 'kiwi');

$fruits[] = 'papaya'; //shorthand for array push





$languages = ['css', 'html5' , 'php', 'javascript'];
$capitalizedLanguages = [];


foreach($languages as $language) {
	$capitalizedLanguages[] = strtoupper($language);
	sort($capitalizedLanguages);
}

print_r($capitalizedLanguages);

function combineArrays($array1, $array2) {
	$array3 = [];
	foreach($array1 as $key => $value) {
		if($array1[$key] === $array2[$key]) {
			$array3[] = $array1[$key];
		} else {
			$array3[] = $array2[$key];
			$array3[] = $array1[$key];
		}
		
	}
		return $array3;
}

print_r(combineArrays($names,$compare));























