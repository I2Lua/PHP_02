<?php
require 'BaseClass.php';

class Product extends Base {
	protected $type;
	protected $name;
	protected $price;

	function __construct($type, $name, $price) {
		parent::__construct($type, $name);
		$this->price = $price;
	}

	public function view() {
		return "Имя: {$this->name}
				Тип: {$this->type} 
				Стоимость: {$this->price}р.";
	}

}

class PriceList extends Product {

	public function view() {
		return "\"{$this->name}\" {$this->price}р.";
	} 
}


?>