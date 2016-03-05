<?php

// TODO: Create your inspect() function here
	
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value



// TODO: Create your inspect() function here
function inspect($element){
	// check if STRING and is EMPTY
	if(is_string($element) && $element == ""){
		echo "The String is empty" . PHP_EOL;
	}
	// check if ARRAY
	elseif(is_array($element)) {
		if(empty($element)) {
			echo "The value is an empty array" .PHP_EOL;
		} else {
			echo "the value is an array" .PHP_EOL;

			foreach($element as $array) {
				echo $array .PHP_EOL;
			}
		}
	}					
	// check if value is NULL
	elseif(is_null($element)) {
		echo "the value is NULL";
	}

	// check if BOOLEAN
	elseif(is_bool($element)) {
		if($element == true) {
			echo  "TRUE";
		} else {
			echo "FALSE";
		}
	}		

	// display TYPE and VALUE
	else {
		gettype($element);
		echo "the value is {$element}";
	}
}	


	
	 

echo ' Inspecting $num1: ' . PHP_EOL;
echo inspect($num1) . PHP_EOL;

echo ' Inspecting $num2: ' . PHP_EOL;
echo inspect($num2) . PHP_EOL;

echo ' Inspecting $num3: ' . PHP_EOL;
echo inspect($num3) . PHP_EOL;

echo ' Inspecting $num4: ' . PHP_EOL;
echo inspect($num4) . PHP_EOL;

echo ' Inspecting $null: ' . PHP_EOL;
echo inspect($null) . PHP_EOL;

echo ' Inspecting $bool1 ' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;

echo ' Inspecting $bool2 ' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;

echo ' Inspecting $string1 ' . PHP_EOL;
echo inspect($string1) . PHP_EOL;

echo ' Inspecting $string2 ' . PHP_EOL;
echo inspect($string2) . PHP_EOL;

echo ' Inspecting $array1 ' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo ' Inspecting $array2 ' . PHP_EOL;
echo inspect($array2) . PHP_EOL;