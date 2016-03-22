<?php

// logMessage (level , says something )
function logMessage($logLevel, $message){
	// time (current)
	$time = date("H-i-s");
	// date (current)
	$date = date("Y-m-d");
	// name of file in STRING form
    $filename = 'log-YYYY-MM-DD.log';

	// open the file, APPEND (append = add to page NOT REPLACE!)
    $handle = fopen($filename, 'a');

    $logLevel = 'hi';

    $message = 'hi';

    // whats going to be displayed
    $onScreen = "Todays date: {$date}  The Current Time: {$time} " . $logLevel . " " . $message . PHP_EOL;

    // write to page add END OF LINE
	fwrite($handle,"$onScreen" . PHP_EOL);

}

// logInfo message displayed on screen (actually for us)
function logInfo($argue){
	logMessage("INFO", $argue);
}

// logError message displayed on screen (FOR US to know that something is wrong)
function logError($debate){
	logMessage("ERROR", $debate);
}

// i got variables that are basically dynamic (they can get passed to function)
$argue = "theres stuff in here";
$debate = "Error";
logInfo($argue);
logError($debate);

// call function w/ my variable (that is a string)

// call function w/ my variable (that is a string)





  //YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE