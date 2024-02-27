<?php
//�������� ������
class figure {
	
	//������������� �������
	protected $type;
	protected $color;

	//����������� ������
	public function __construct($type, $color) {
		$this -> type = $type;
		$this -> color = $color; 
	}

	//����� �� �����
	public function displayInfo() {
		echo $this->type," ", $this->color, " ";
	}
}


//����� ��������� ����
class circle extends figure {
	
	//����� ������� �����
	public function CircleArea($radius) {
		return pi() * $radius * $radius . "<br>";
	}

}

//����� ��������� �������
class square extends figure {
	
	//����� ������� ��������
	public function SquareArea($a) {
		return $a * $a . "<br>";
	}

}

//����� ��������� �����������
class triangle extends figure {
	
	//����� ������� ������������
	public function TriangleArea($height, $a) {
		return 0.5 * $height * $a . "<br>";
	}

}



//�������� ��������
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