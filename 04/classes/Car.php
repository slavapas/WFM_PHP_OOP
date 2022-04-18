<?php

	class Car
	{
		public $model;
		public $color;
		public $wheels;
		public $speed;

		public function __construct($model, $color='red', $wheels=4, $speed=5)
		{
			$this->model = $model;
			$this->color = $color;
			$this->wheels = $wheels;
			$this->speed = $speed;
			var_dump($this);
			echo '<br>';
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