	<?php 

	require_once 'Automobile.php';



	$make = 'Chevy';
	$model = 'Camaro';
	$year = '1969';


	$car = new Automobile($make, $model, $year);

	$car1 = new Automobile('Chevy', 'Corvetter', '1998');


	echo $car->getDescription();
	echo $car1->getDescription();