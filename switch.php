<?php


 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1: 
     	echo "$dayOfWeek is " . 1;
     	break;
         // Output Monday
     case 2: 
     	echo "dayOfWeek is" . 2;
     	break;
     case 3:
     	echo "dayOfWeek is" . 3;
     	break;
     case 4:
     	echo "dayOfWeek is" . 4;
     	break;
     case 5:
     	echo "dayOfWeek is" . 5;
     	break;
     case 6:
     	echo "dayOfWeek is" . 6;
     	break;
     case 7:
     	echo "dayOfWeek is" . 7;
     	break;

}
      