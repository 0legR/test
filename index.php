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

	function getProducer(){
		return "{$this->producerFirstName} "
				."{$this->producerMainName}";
	}

	function getSummaryLine(){
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		return $base;
	}
}

class CDProduct extends ShopProduct {
	private $playLength;

	function __construct($title, $producerMainName, $producerFirstName, $price, $playLength){
		parent::__construct($title, $producerMainName, $producerFirstName, $price);
		$this->playLength = $playLength;
	}

	function getPlayLength(){
		return $this->playLength;
	}

	function getSummaryLine(){
		$base = parent::getSummaryLine();
		$base .= ": Playing time - {$this->playLength}";
		return $base;
	}
}

class BookProduct extends ShopProduct{
	private $numPages;

	function __construct($title, $producerMainName, $producerFirstName, $price, $numPages){
		parent::__construct($title, $producerMainName, $producerFirstName, $price);
		$this->numPages = $numPages;
	}

	function getAmountOfPages(){
		return $this->numPages;
	}

	function getSummaryLine(){
		$base = parent::getSummaryLine();
		$base .= ": Amount of pages - {$this->numPages}";

		return $base;
	}
}

$product1 = new CDProduct("Tayga", "Group", "Agata Kristy", 5.34, 75.45);
print("A song: {$product1->getSummaryLine()}\n");
echo '<br>';
$product2 = new BookProduct("Viy", "Gogol", "Nikolay", 82.45, 389);
print("Book: {$product2->getSummaryLine()}\n");

?>