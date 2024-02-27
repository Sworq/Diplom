<?php 

class car {
	private $brand;
	private $model;
	private $year;
	private $price;

	public function setBrand($brand) {
		$this -> brand = $brand;
	}

	public function getBrand() {
		return $this -> brand;
	}

	public function setModel($model) {
		$this -> model = $model;
	}

	public function getModel() {
		return $this -> model;
	}

	public function setYear($year) {
		$this -> year = $year;
	}

	public function getYear() {
		return $this -> year;
	}

	public function setPrice($price) {
		$this -> price = $price;
	}

	public function getPrice() {
		return $this -> price;
	}

	public function nalog() {
		return 0.1 * $this -> price;
	}

}

$car = new car();

$car -> setBrand("Chevrole");
$car -> setModel("Lachetti");
$car -> setYear(2007);
$car -> setPrice(410000);

echo $car -> getBrand() . "<br>" . $car -> getModel() . "<br>" . $car -> getYear() . "<br>" . $car -> getPrice() . "<br>";
echo "Nalog = " . $car -> nalog();

?>