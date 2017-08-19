<?php
require "BaseClass.php";

class RealProduct {
	public price;

	function __construct($productPrice) {
		$this->price = $productPrice;
	}

	public function view() {
		return "Цена {$this->price}";
	}
}

$obj = new RealProduct(100);
echo $obj->view();


?>