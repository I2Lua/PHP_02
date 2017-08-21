<?php
require "BaseClass.php";

class VirtualProduct extends Base {
	private $price;
	private $pieceProduct;
	private $priceWithPieceProduct;
	
	public function __construct($realPrice = 49, $pieceProducts = null) {
		$this->price = parent::getVirtualProductPrice($realPrice);
		$this->pieceProduct = $pieceProducts;
		if ($this->pieceProduct !== null) {
			$this->priceWithPieceProduct = parent::getPricePieceProduct($this->price, $this->pieceProduct);
		}
	}
	
	public function view() {
		if ($this->pieceProduct === null) {
			return "Цена виртуального товара: {$this->price}";
		}
		else {
			return "Цена виртуального товара: {$this->price};
					Выбрано штук: {$this->pieceProduct};
					Итог: {$this->priceWithPieceProduct}р.";
		}
	}
}

class RealProduct extends Base {
	private $price;
	private $name;
	
	public function __construct($name, $price) {
		$this->price = $price;
		$this->name = $name;
	}
	
	public function view() {
		return "Название продукта: {$this->name};
				Цена: {$this->price}";
	}
}

class PieceProduct extends Base {
	private $price;
	private $piece;
	private $name;
	private $result;
	
	public function __construct($name, $price, $piece = 1) {
		$this->price = $price;
		$this->piece = $piece;
		$this->name = $name;
		$this->result = parent::getPricePieceProduct($this->price, $this->piece);
	}
	
	public function view() {
		if ($this->piece === null || $this->piece <= 1) {
			return "Название продукта: {$this->name};
					Цена: {$this->price}";
		} else {
			return "Название продукта: {$this->name};
					Цена: {$this->price};
					Штук: {$this->piece};
					Итог: {$this->result}";
		}
	}
}
$obj = new PieceProduct("Еда", 20, 5);
echo $obj->view();

?>





