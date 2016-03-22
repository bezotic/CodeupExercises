<?php


 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1: 
     	echo "$dayOfWeek is monday\n";
     	break;
         // Output Monday
     case 2: 
     	echo "dayOfWeek is tuesday\n";
     	break;
     case 3:
     	echo "dayOfWeek is wednesday\n";
     	break;
     case 4:
     	echo "dayOfWeek is thursday\n";
     	break;
     case 5:
     	echo "dayOfWeek is friday\n";
     	break;
     case 6:
     	echo "dayOfWeek is saturday\n";
     	break;
     case 7:
     	echo "dayOfWeek is sunday\n";
     	break;

}
      

