<?php 






echo "Please input a filename \n";
$filename = 'states.csv';


 $handle = fopen($filename, 'r');
 $contentString = fread($handle, filesize($filename));
 $contentString = trim($contentString);

 fclose($handle);


 $arrayOfStrings = explode("\n", $contentString);

 $arrayofStates = [];

 foreach($arrayOfStrings as $string) {
 	$stateAssociativeArray = [];
 	
 	$stateInfo = explode(",", $string);
 	
 	$abbreviation = $stateInfo[0];
 	$stateName = $stateInfo[1];
 	
 	$stateAssociativeArray[$abbreviation] = $stateName;
 	
 	$arrayofStates[] = $stateAssociativeArray;

 }

 print_r($arrayofStates);


 //$content = file_get_contents(filename);