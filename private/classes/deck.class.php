<?php 
require '../vendor/autoload.php';

class Deck implements \PetrKnap\Php\Singleton\SingletonInterface {
	use \PetrKnap\Php\Singleton\SingletonTrait;

	private $deck = array();
	

	function __construct() {
		if(count($this->deck) === 0){
			$deckPosition = 0;
	 		foreach (array("Clubs", "Diamonds", "Hearts", "Spades") as $suit) {
	 			for ($i=1; $i < 14; $i++) { 
	 				$card = new Card($i, $suit);
	 				$this->deck[$deckPosition] = $card;
	 				$deckPosition ++;
	 			}
	 		}
		}
	}

	public function getDeck(){
		return $this->deck;
	}

	public function shuffle(){
		$oldDeck = $this->deck;
		for ($i = count($oldDeck) - 1; $i >= 0; $i--) {
			$randomIndex = array_rand(range(0, $i));
			$this->deck[$i] = $oldDeck[$randomIndex];
			array_splice($oldDeck, $randomIndex, 1);
		}
	}

	

	

	
}


?>