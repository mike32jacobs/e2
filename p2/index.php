<?php
session_start();

echo (is_null($_SESSION['results']));
// var_dump($_SESSION['results']);


if(!is_null($_SESSION['results'])){
// if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $dealerHand = $results['dealerHand'];
    $playerHand = $results['playerHand'];
    $deck = $results['deck'];
    $playerTotal = $results['playerTotal'];
    $dealerTotal = $results['dealerTotal'];

    $_SESSION['results'] = null;
} 
// Build a new game

$deck = build_deck();
shuffle($deck);

$playerHand =array();

$dealerHand = array();

// Deal two cards to player, and to the dealer

$playerHand = deal_to_player($playerHand,2);
$dealerHand = deal_to_player($dealerHand,2);

// var_dump($dealerTotal);

// Calculate sum of cards

$playerTotal = calculate_total($playerHand);
$dealerTotal = calculate_total($dealerHand);

// user defined function to build a deck

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
            array_push($deck,array($cardNames[$cardNumber], $suit, $cardValues[$cardNumber]));
        }
    }

    return $deck;
}

// Function to find the sum of any hand
function calculate_total(array $hand)
    {
        $sum = 0;

        // Iterate through cards, and sum the values
        for ($i=0; $i <count($hand); $i++){
            $sum = $sum + $hand[$i][2];
        }
        echo 'Here comes the sum';
        var_dump($sum);


        // If sum is greater than 21, check to see if there is an ace in the player's hand. If there is, count the total using a 1 instead of an 11.

        if($sum>21){
            if (in_array('A',$hand)){
                
                //recalculate the sum using 1 instead of 11
                $sum= $sum -10;
                
            }
        }
        return $sum;
    }


// User defined funtion to deal to a player. This may not be needed in a one player game, but it will be needed if there are multiple players, or if a player splits and has two hands.

function deal_to_player(array $player, int $numCards){
    global $deck;
    // global $player;
    
    for ($i= 0; $i < $numCards; $i++){
        $drawCard = array_shift($deck);
        array_push($player, $drawCard);
    }

    return $player;
}

// function new_game(){
//     $deck = build_deck();
//     shuffle($deck);

//     $playerHand =array();

//     $dealerHand = array();

//     // Deal two cards to player, and to the dealer

//     $playerHand = deal_to_player($playerHand,2);
//     $dealerHand = deal_to_player($dealerHand,2);

//     // var_dump($dealerTotal);

//     // Calculate sum of cards

//     $playerTotal = calculate_total($playerHand);
//     $dealerTotal = calculate_total($dealerHand);
// }

$_SESSION['results'] = [
    'deck' => $deck,
    'playerHand'=> $playerHand,
    'dealerHand'=> $dealerHand,
    'playerTotal'=>$playerTotal,
    'dealerTotal'=>$dealerTotal,
];

require 'index-view.php';