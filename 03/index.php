<?php

	require_once 'classes/Car.php';

//	echo 'hi';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	$car1 = new Car();
	$car1->model = 'Volvo';
	$car1->color = 'red';
	$car1->wheels = 4;
	$car1->speed = 5;

	$car2 = new Car();
	$car2->model='BMW';
	$car2->color = 'yellow';
	$car2->wheels = 3;
	$car2->speed = 4;

//	debug($car1);

	echo $car1->getCarInfo() . '<br>';
	echo $car2->getCarInfo();

