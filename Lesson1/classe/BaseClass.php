<?php

class Base {
	protected $type;
	protected $name;

	function __construct($type, $name) {
		$this->type = $type;
		$this->name = $name;
	}

	public function view() {
		return "Тип: {$this->type} Имя: {$this->name}";
	}
}