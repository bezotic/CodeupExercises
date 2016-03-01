<?php 



for ($i = 2; $i <= 100; $i +=2) {
	echo "$i\n";
	if ($i > 10) {
		continue;
	}
}

for ($i =2; $i <= 100; $i +=2) {
	echo "$i\n";
	if ($i == 10) {
		break ;
	}
}