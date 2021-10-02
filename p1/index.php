<?php

// + _Create an array for a deck of cards._
// + _The "deck" array should hold 4 different arrays. One for each suit._
$deck = [
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
];


// Shuffle the "deck."

shuffle($deck);

// $cardName = $deck[0]['name'];
// $cardSuit = $deck[0]['suit'];

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




// + _ There will also be a display of the result of each hand _
// + _A new row in the table will be created for each round._
// + _The table row will display player1Card, player2Card, result, and the number of cards in each players' hand._
// + _There will be a global variable to count the number of rounds.
// + _There will a display which tells the reader the winner.
 

require 'index-view.php';