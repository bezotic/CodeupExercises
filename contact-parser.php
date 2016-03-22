<?php

function parseContacts($filename) {
    $contacts = [

    	0 => [
    	'name' => 'blah',
    	'phone number' => 'hi'
    	]
    ];

    $handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	trim($contents);
	fclose($handle);
	var_dump($contents);

	$contents = explode("\n", $contents);
	var_dump($contents);

	


    foreach($contents as $contact => $info) {

    	if (empty($info)) {
    		continue;
    	}

    	$newArray = explode('|', $info);
    	$contacts[$contact]['name'] = $newArray[0];
    	$contacts[$contact]['phone number'] = $newArray[1];

    }

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));








    







