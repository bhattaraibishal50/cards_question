
<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>
<?php
$firstDeck = new Deck();
$suffleDeck = Deck::getInstance();
// print_r($suffleDeck);
$newDeck = Deck::getInstance();
// print_r($newDeck);
// if($suffleDeck == $newDeck){
// 	echo "equal in state";
// }

?>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">A Card Test ;)</a>
			</div>
				<button id= "shuffleBtn" type="button" class="btn btn-default navbar-btn">Shuffle</button>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">

		<div class="col-md-12">
			<!-- FRESH DECK -->
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Fresh Deck (Deck 1)</div>
					<div class="panel-body">
						<?php foreach ($firstDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- SUFFLE PART -->
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Shuffled (Deck 1)</div>
					<div class="panel-body" id="suffleDeckPannel">
						<?php $suffleDeck->shuffle(); ?>
						<?php foreach ($suffleDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- new deck to player -->
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">New Deck (Deck 2)</div>
					<div class="panel-body" id="newDeckPannel">
						<?php foreach ($newDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include(SHARED_PATH . '/public_footer.php'); ?>