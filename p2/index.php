<?php

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
$deck = build_deck();

require 'index-view.php';