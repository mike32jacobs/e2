<?php


session_start();
// if(!is_null($_SESSION['results'])){
if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $dealerHand = $results['dealerHand'];
    $playerHand = $results['playerHand'];
    $deck = $results['deck'];
    $playerTotal = $results['playerTotal'];
    $dealerTotal = $results['dealerTotal'];

    $_SESSION['results'] = null;
} 



$move = $_POST['move'];

var_dump($move);

if ($move == 'new_game'){

    // Start a game from scratch. Clear the session and go to index
    $_SESSION['results'] = null;
    header('Location: index.php');
    
} elseif ($move == 'stay') {
    
    // player is done. Dealer's turn
    
    echo 'stay';

} elseif ($move == 'hit'){

    // Give player another card
    $playerHand = deal_to_player($playerHand,1);
    var_dump($playerHand);
    
    // Calculate sum of cards
    $playerTotal = calculate_total($playerHand);
    var_dump($playerTotal);


} elseif ($move == 'split') {

    //Check to see if player can split
    if (can_split($p1Hand)){
        split($playerHand);
    }

} elseif ($move == 'double_down') {
    
    //Check to see if player can double
    if (can_double_down($p1Hand)){
        double_down($playerHand);
    }
}





function can_split($playerHand){

    // A player can split if they have two cards of equal value

    if($playerHand[0]==$playerHand[1]){
        return true;
    }else {
        return false;
    }
}

function split($playerHand){

    // Do this later

    echo 'Split: This function is yet to be created.';
    echo $playerHand;
}

function can_double_down($playerHand){

    // A player can double down if their cards total 9, 10 or 11. 

    $doubleDownTotals = [9, 10, 11];

    $total = array_sum($playerHand);

    if(in_array($total, $doubleDownTotals) ){
        return true;
    }else {
        return false;
    }
}

function double_down($playerHand){

    // Do this later

    echo 'Double Down: This function is yet to be created.';
}

function check_total(int $total){
        // If sum is less than 21, give the player another turn
        if ($total < 21){
            echo "you have another turn";
            // Let player go again
            
        } elseif ($total == 21){
    
            //Player wins

            echo "you win";
            
        } else {
    
            //Player loses
            
            echo "you lose";
    
        }
}

echo 'This is the player hand';
var_dump($playerHand);


function build_deck()
{
    // Dynamically create a deck of cards using a multidimensional array.

    $cardNames = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    $cardValues = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 11);
    $cardSuits =array('Hearts','Spades','Diamonds','Clubs');

    $newDeck = array();

    foreach ($cardSuits as $suit) {
        for ($cardNumber = 0; $cardNumber< 13; $cardNumber++)
        {
            array_push($deck,array($cardNames[$cardNumber], $suit, $cardValues[$cardNumber]));
        }
    }

    return $newDeck;
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

$_SESSION['results'] = [
    'deck' => $deck,
    'playerHand'=> $playerHand,
    'dealerHand'=> $dealerHand,
    'playerTotal'=> $playerTotal,
    'dealerTotal'=>$dealerTotal
];

// require 'index-view.php';
require 'index.php';