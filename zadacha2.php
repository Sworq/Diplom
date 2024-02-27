<?php 

abstract class shape {
	
	abstract public function getArea();
	abstract public function getPerimeter();
	/*abstract public function getPerimeter();*/
	
}

class square extends shape {
	private $side;

	public function __construct($side){
		$this -> side = $side;
	}

	public function getArea() {
		return $this -> side * $this -> side;
	}

	public function getPerimeter() {
		return 4 * $this -> side;
	}
}

class rectangle extends shape {
	private $length;
	private $width;

	public function __construct($length, $width) {
		$this -> length = $length;
		$this -> width = $width;
	}

	public function getArea() {
		return $this -> length * $this -> width;
	}

	public function getPerimeter() {
		return 2 * ($this -> length + $this -> width);
	}
}

class circle extends shape {
	private $radius;

	public function __construct($radius) {
		$this -> radius = $radius;
	}

	public function getArea() {
		return pi() * $this -> radius * $this -> radius;
	}

	public function getPerimeter() {
		return 2 * pi() * $this -> radius;
	}
}

$square = new square(2);
echo "Square   " . $square -> getArea() . " " . $square -> getPerimeter() . "<br>";

$rectangle = new rectangle(5, 6);
echo "rectangle   " . $rectangle -> getArea() . " " . $rectangle -> getPerimeter() . "<br>";

$circle = new circle(3);
echo "circle   " . $circle -> getArea() . " " . $circle -> getPerimeter();
?>