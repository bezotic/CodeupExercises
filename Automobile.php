	<?php

	class Automobile
	{
		public $make;
		public $model;
		public $year;




	public function __construct($make, $model, $year)
	{
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		
	}

	public function getDescription()
	{
		return $this->make . " " . $this->model . " " . $this->year . PHP_EOL;
	}



	public function __destruct()
	{
		echo "The Automobile object was destroyed" .PHP_EOL;
	}

	}

