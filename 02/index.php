<?php

	require_once 'classes/Car.php';

//	echo 'hi';

	function debug($data)
	{
		echo '<pre>'. print_r($data, 1) . '</pre>';
	}

	$car1 = new Car();
	$car1->color='red';

	debug($car1);

