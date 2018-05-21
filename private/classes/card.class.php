<?php 
/**
* 
*/
class Card {
	private $value;
	private $suit;
	private $image;

	function __construct(int $value, string $suit) {
		$this->value = $value;
		$this->suit = $suit;
		$this->setImage();
	}

	private function setImage() {
		switch ($this->value) {
			case 1:
				$valueName = "ace";
				break;
			case 2:
				$valueName = "2";
				break;
			case 3:
				$valueName = "3";
				break;
			case 4:
				$valueName = "4";
				break;
			case 5:
				$valueName = "5";
				break;
			case 6:
				$valueName = "6";
				break;
			case 7:
				$valueName = "7";
				break;
			case 8:
				$valueName = "8";
				break;
			case 9:
				$valueName = "9";
				break;
			case 10:
				$valueName = "10";
				break;
			case 11:
				$valueName = "jack";
				break;
			case 12:
				$valueName = "queen";
				break;
			case 13:
				$valueName = "king";
				break;
			default:
				break;
		}
		$this->image = "images/" . $valueName . "_of_" . strtolower($this->suit) . ".png";
	}

	public function getImage() {
		return $this->image;
	}

	public function getValue() {
		return $this->value;
	}

	public function getSuit() {
		return $this->suit;
	}
}

?>