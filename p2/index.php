<?php


$deck = build_deck();
shuffle($deck);

// Create an array of  players in the game. This is hard coded, but it will eventually make it easier to let the user choose the number of players.

$numberOfPlayers = 4;

$players = array();
$hands = array();

for ($i = 0; $i<$numberOfPlayers; $i++)
{
    // Convert i to a string
    $pNumber = strval($i+1);
    array_push($players,'p'.$pNumber);

    // Create an array to hold each player's cards
    $handName = 'p'.$pNumber.'Hand';
    $$handName = [];

    //add each hand to the Hands array
    array_push($hands,$$handName);

}
var_dump($players);
var_dump($hands);
// var_dump($p2Hand);
// var_dump($p3Hand);
// var_dump($p4Hand);

// Deal two cards to each player in the game

foreach ($hands as $hand){
    $drawCard = array_shift($deck);
    array_push($hand, $drawCard);
    $drawCard = array_shift($deck);
    array_push($hand, $drawCard);

}

    // $drawCard = array_shift($deck);
    // array_push(hands[$p1Hand][0], $drawCard);

// var_dump($hands);
var_dump($p1Hand);


// Deal to the dealer


// user definted function to build a deck

function build_deck()
{
    // Dynamically create a deck of cards using a multidimensional array.

    $cardNames = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    $cardValues = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 11);
    $cardSuits =array('Hearts','Spades','Diamonds','Clubs');

    $deck = array();

    foreach ($cardSuits as $suit) {
        for ($cardNumber = 0; $cardNumber< 13; $cardNumber++)
        {
            array_push($deck,$cardNames[$cardNumber], $suit, $cardValues[$cardNumber] );
        }
    }

    return $deck;
}

// User defined funtion to deal to a player. This may not be needed in a one player game, but it will be needed if there are multiple players, or if a player splits and has two hands.

function deal_to_player($player){


}

require 'index-view.php';