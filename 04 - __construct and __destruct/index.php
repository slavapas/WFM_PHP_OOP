<?php

	use classes\Car;

	require_once 'classes/Car.php';

//	echo 'hi';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	$car1 = new Car('Volvo', 'grey', 200, 4);
	$car2 = new Car('BMW', 'blue', 300, 5);


//	debug($car1);

	echo $car1->getCarInfo() . '<br>';
	echo $car2->getCarInfo();

