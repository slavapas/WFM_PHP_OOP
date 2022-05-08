<?php

//	use classes\Car;

//	Report all PHP errors
	error_reporting(-1);

// connect Car.php file
	require_once 'classes/Car.php';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

//	echo Car::$countCar . '<br>';
	$car1 = new Car('Volvo', 'red', 150, 4);
	$car2 = new Car('BMW', 'blue', 300, 5);
	echo 'Количество машни: ';
	echo Car::$countCar;
	echo "<br>";
//	echo Car::getCount() . '<br>';


//	debug($car1);

	echo $car1->getCarInfo();
	echo $car2->getCarInfo();
