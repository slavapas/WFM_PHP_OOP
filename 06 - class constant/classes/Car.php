<?php

//	namespace classes;
	class Car
	{
		public $model;
		public $color;
		public $wheels;
		public $speed;

		public static $countCar = 0;

		public function __construct($model, $color, $wheels, $speed)
		{
			$this->model = $model;
			$this->color = $color;
			$this->wheels = $wheels;
			$this->speed = $speed;

			//считаеми машины при каждом их создания
			self::$countCar++;
		}

		public static function getCount()
		{
			return self::$countCar;
		}

		public function getCarInfo()
		{
			return
					"<br><br>Model---: {$this->model} <br>
					Color: {$this->color} <br>
					Wheels: {$this->wheels} <br>
					Speed: 	{$this->speed} <br>";
		}
	}