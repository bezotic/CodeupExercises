<?php 



for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 != 0) {
		continue;
		
	}
	echo "$i\n";
}	


for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 != 0) {
		continue;
	} else if ($i > 10) {
		break;
	}
	echo "$i\n";
}


