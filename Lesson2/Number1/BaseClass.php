<?php

abstract class Base {
    public abstract function view();
	
	public function getVirtualProductPrice($realProductPrice) {
		return $realProductPrice / 2;
	}
	public function getPricePieceProduct($productPrice, $pieces) {
		return $productPrice * $pieces;
	}
	
}
