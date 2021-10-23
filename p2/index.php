<?php


$deck = build_deck();
shuffle($deck);

// Create an array players in the game. This is hard coded, but it will eventually make it easier to let the user choose the number of players.

$numberOfPlayers = 4;

$players = array();

for ($i = 0; $i<$numberOfPlayers; $i++)
{
    // Convert i to a string
    $pNumber = strval($i+1);
    array_push($players,'p'.$pNumber);

}
var_dump($playerNames);

// Deal to each player in the game

foreach ($players as $player){
    $topCard = array_shift($deck);
    array_push($player1Hand, $topCard);

    // The player gets two cards off of the deck
    
}

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