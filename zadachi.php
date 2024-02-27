<?php
//создание класса
class figure {
	
	//инициализация свойств
	protected $type;
	protected $color;

	//конструктор класса
	public function __construct($type, $color) {
		$this -> type = $type;
		$this -> color = $color; 
	}

	//вывод на экран
	public function displayInfo() {
		echo $this->type," ", $this->color, " ";
	}
}


//класс наследник круг
class circle extends figure {
	
	//вывод площади круга
	public function CircleArea($radius) {
		return pi() * $radius * $radius . "<br>";
	}

}

//класс наследник квадрат
class square extends figure {
	
	//вывод площади квадрата
	public function SquareArea($a) {
		return $a * $a . "<br>";
	}

}

//класс наследник треугольник
class triangle extends figure {
	
	//вывод площади треугольника
	public function TriangleArea($height, $a) {
		return 0.5 * $height * $a . "<br>";
	}

}



//создание объектов
$square = new square("square", "red");
$square->displayInfo();
echo $square->SquareArea(4);

$circle = new circle("circle", "blue");
$circle->displayInfo();
echo $circle->CircleArea(4);

$triangle = new triangle("triangle", "green");
$triangle->displayInfo();
echo $triangle->TriangleArea(4, 6);

?>