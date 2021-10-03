<?php

// Create an array for a deck of cards.

$deckHardCode = [
    0=> [
        'name'=>'2',
        'suit'=>'hearts',
        'value'=>2
    ] ,
    1 => [
        'name'=>'3',
        'suit'=>'hearts',
        'value'=>3
    ] ,
    2 => [
        'name'=>'4',
        'suit'=>'hearts',
        'value'=>4
    ] ,
    3 => [
        'name'=>'5',
        'suit'=>'hearts',
        'value'=>5
    ] ,
    4 => [
        'name'=>'6',
        'suit'=>'hearts',
        'value'=>6
    ] ,
    5=> [
        'name'=>'7',
        'suit'=>'hearts',
        'value'=>7
    ] ,
    6=> [
        'name'=>'8',
        'suit'=>'hearts',
        'value'=>8
    ] ,
    7=> [
        'name'=>'9',
        'suit'=>'hearts',
        'value'=>9
    ] ,
    8=> [
        'name'=>'10',
        'suit'=>'hearts',
        'value'=>10
    ] ,
    9=> [
        'name'=>'J',
        'suit'=>'hearts',
        'value'=>11
    ] ,
    10=> [
        'name'=>'Q',
        'suit'=>'hearts',
        'value'=>12
    ] ,
    11=> [
        'name'=>'K',
        'suit'=>'hearts',
        'value'=>13
    ] ,
    12=> [
        'name'=>'A',
        'suit'=>'hearts',
        'value'=>14
    ] ,
    // 13=> [
    //     'name'=>'2',
    //     'suit'=>'spades',
    //     'value'=>2
    // ] ,
    // 14 => [
    //     'name'=>'3',
    //     'suit'=>'spades',
    //     'value'=>3
    // ] ,
    // 15 => [
    //     'name'=>'4',
    //     'suit'=>'spades',
    //     'value'=>4
    // ] ,
    // 16 => [
    //     'name'=>'5',
    //     'suit'=>'spades',
    //     'value'=>5
    // ] ,
    // 17 => [
    //     'name'=>'6',
    //     'suit'=>'spades',
    //     'value'=>6
    // ] ,
    // 18=> [
    //     'name'=>'7',
    //     'suit'=>'spades',
    //     'value'=>7
    // ] ,
    // 19=> [
    //     'name'=>'8',
    //     'suit'=>'spades',
    //     'value'=>8
    // ] ,
    // 20=> [
    //     'name'=>'9',
    //     'suit'=>'spades',
    //     'value'=>9
    // ] ,
    // 21=> [
    //     'name'=>'10',
    //     'suit'=>'spades',
    //     'value'=>10
    // ] ,
    // 22=> [
    //     'name'=>'J',
    //     'suit'=>'spades',
    //     'value'=>11
    // ] ,
    // 23=> [
    //     'name'=>'Q',
    //     'suit'=>'spades',
    //     'value'=>12
    // ] ,
    // 24=> [
    //     'name'=>'K',
    //     'suit'=>'spades',
    //     'value'=>13
    // ] ,
    // 25=> [
    //     'name'=>'A',
    //     'suit'=>'spades',
    //     'value'=>14
    // ] ,
    // 26=> [
    //     'name'=>'2',
    //     'suit'=>'diamonds',
    //     'value'=>2
    // ] ,
    // 27 => [
    //     'name'=>'3',
    //     'suit'=>'diamonds',
    //     'value'=>3
    // ] ,
    // 28 => [
    //     'name'=>'4',
    //     'suit'=>'diamonds',
    //     'value'=>4
    // ] ,
    // 29 => [
    //     'name'=>'5',
    //     'suit'=>'diamonds',
    //     'value'=>5
    // ] ,
    // 30 => [
    //     'name'=>'6',
    //     'suit'=>'diamonds',
    //     'value'=>6
    // ] ,
    // 31=> [
    //     'name'=>'7',
    //     'suit'=>'diamonds',
    //     'value'=>7
    // ] ,
    // 32=> [
    //     'name'=>'8',
    //     'suit'=>'diamonds',
    //     'value'=>8
    // ] ,
    // 33=> [
    //     'name'=>'9',
    //     'suit'=>'diamonds',
    //     'value'=>9
    // ] ,
    // 34=> [
    //     'name'=>'10',
    //     'suit'=>'diamonds',
    //     'value'=>10
    // ] ,
    // 35=> [
    //     'name'=>'J',
    //     'suit'=>'diamonds',
    //     'value'=>11
    // ] ,
    // 36=> [
    //     'name'=>'Q',
    //     'suit'=>'diamonds',
    //     'value'=>12
    // ] ,
    // 37=> [
    //     'name'=>'K',
    //     'suit'=>'diamonds',
    //     'value'=>13
    // ] ,
    // 38=> [
    //     'name'=>'A',
    //     'suit'=>'diamonds',
    //     'value'=>14
    // ] ,
    // 39=> [
    //     'name'=>'2',
    //     'suit'=>'clubs',
    //     'value'=>2
    // ] ,
    // 40 => [
    //     'name'=>'3',
    //     'suit'=>'clubs',
    //     'value'=>3
    // ] ,
    // 41 => [
    //     'name'=>'4',
    //     'suit'=>'clubs',
    //     'value'=>4
    // ] ,
    // 42 => [
    //     'name'=>'5',
    //     'suit'=>'clubs',
    //     'value'=>5
    // ] ,
    // 43 => [
    //     'name'=>'6',
    //     'suit'=>'clubs',
    //     'value'=>6
    // ] ,
    // 44=> [
    //     'name'=>'7',
    //     'suit'=>'clubs',
    //     'value'=>7
    // ] ,
    // 45=> [
    //     'name'=>'8',
    //     'suit'=>'clubs',
    //     'value'=>8
    // ] ,
    // 46=> [
    //     'name'=>'9',
    //     'suit'=>'clubs',
    //     'value'=>9
    // ] ,
    // 47=> [
    //     'name'=>'10',
    //     'suit'=>'clubs',
    //     'value'=>10
    // ] ,
    // 48=> [
    //     'name'=>'J',
    //     'suit'=>'clubs',
    //     'value'=>11
    // ] ,
    // 49=> [
    //     'name'=>'Q',
    //     'suit'=>'clubs',
    //     'value'=>12
    // ] ,
    // 50=> [
    //     'name'=>'K',
    //     'suit'=>'clubs',
    //     'value'=>13
    // ] ,
    // 51=> [
    //     'name'=>'A',
    //     'suit'=>'clubs',
    //     'value'=>14
    // ] ,
];

//This is an attempt to create a deck differently
// I could use these, and run a loop
$cardNames = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
$cardSuits =array('Hearts','Spades','Diamonds','Clubs');
// $cardValues = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

$deck = array();

for ($suit = 0; $suit < 4; $suit++) {
    for ($value = 2; $value< 15; $value++){
        array_push($deck, array($cardNames[$value - 2], $cardSuits[$suit], $value));
    }
}
// shuffle($dynamicDeck);
// var_dump($dynamicDeck);

// $deck2= array (
//     array(2, 'hearts', 2),
//     array(3, 'hearts', 3),
//     array(4, 'hearts', 4),
//     array(5, 'hearts', 5),
//     array(6, 'hearts', 6),
//     array(7, 'hearts', 7),
//     array(8, 'hearts', 8),
//     array(9, 'hearts', 9),
//     array(10, 'hearts', 10),
//     array('J', 'hearts', 11),
//     array('Q', 'hearts', 12),
//     array('K', 'hearts', 13),
//     array('A', 'hearts', 14),
// );


// Shuffle the "deck."

shuffle($deck);

// Create an array for each player's hand

$player1Hand = [];
$player2Hand = [];

// Create a variable to count the number of rounds played.

$roundsPlayed = 0;

// Deal cards to each player. Toggle from player to player until the cards are gone.

$dealTo ='player1';

while (count($deck) > 0) {
    if($dealTo == 'player1'){
        $drawCard = array_shift($deck);
        array_push($player1Hand, $drawCard);
        $dealTo ='player2';
    } else {
        $drawCard = array_shift($deck);
        array_push($player2Hand, $drawCard);
        $dealTo ='player1';
    }
    
}

// Create variable to keep track of how many cards in each player's hand. 
// ?These two variable may not really be needed. I used them originally before I ended up creating arrays for cards remaining.

$cardsRemainingP1 = count($player1Hand);
$cardsRemainingP2 = count($player2Hand);

// Create arrays to keep track of the data from each round. One array for each piece of info.

$p1CardsPlayedData = [];
$p2CardsPlayedData = [];
$roundWinnersData = [];
$cardsRemainingP1Data = [];
$cardsRemainingP2Data =[]; 

// Play the game until one player has zero cards left.

while ((count($player1Hand) != 0) && (count($player2Hand)!= 0)) {
    
    // Once both players have their cards, they should take the card off the top, and place it on the board.

    $p1Card = array_shift($player1Hand);
    $p2Card = array_shift($player2Hand);

    // Compare the values of player1Card and player2Card. The interesting thing will be how to compare cards. The result of the comparison will either add cards to one of the player's hands or discard them.

    $roundWinner = 'tie';
    
    if ($p1Card['value'] == $p2Card['value']){
        
        // It is a tie. Both cards are removed

        $roundWinner = 'tie';
    } elseif ($p1Card['value'] > $p2Card['value']) {
        
        // Player one wins. Add both card to player1Hand

        array_push($player1Hand, $p1Card);
        array_push($player1Hand, $p2Card);
        $roundWinner = 'Player 1';

    } else {
        
        // Player 2 wins. Add both cards to player2Hand

        array_push($player2Hand, $p1Card);
        array_push($player2Hand, $p2Card);
        $roundWinner = 'Player 1';
    }

    // Count cards in each player's hand, and iterate the round #
    
    $cardsRemainingP1 = count($player1Hand);
    $cardsRemainingP2 = count($player2Hand);
    $roundsPlayed++;

    // Enter the data from the round into appropriate arrays

    array_push($p1CardsPlayedData, $p1Card);
    array_push($p2CardsPlayedData, $p2Card);
    array_push($roundWinnersData, $roundWinner);
    array_push($cardsRemainingP1Data, $cardsRemainingP1);
    array_push($cardsRemainingP2Data, $cardsRemainingP2);

}

// Determine the game winner

$gameWinner = null;
if (count($player1Hand) == 0) {
    $gameWinner = 'Player 2';
} else{
    $gameWinner = 'Player 1';
}

 

require 'index-view.php';