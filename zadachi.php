<?php

class figure {
	public $type;
	public $color;
	public function Info($type, $color) {
		$this -> type = $type;
		$this -> color = $color; 
	}
}

$a = new figure("�������", "�������");
echo $a->type;
echo $a->color;

?>