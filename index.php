<?php
class ShopProduct{
	
	private $title;
	private $producerMainName;
	private $producerFirstName;
	private $price;

	function __construct($title, $producerMainName, $producerFirstName, $price){
		$this->title = $title;
		$this->producerMainName = $producerMainName;
		$this->producerFirstName = $producerFirstName;
		$this->price = $price;
	}

	function getProducerFirstName(){
		return $this->producerFirstName;
	}

	function getProducerMainName(){
		return $this->producerMainName;
	}

	function getTitle(){
		return $this->title;
	}

	function getPrice(){
		return $this->price - $this->discount;
	}
}
?>