<?php

include('index.php');

// session_start();
// $results = $_SESSION['results'];

// $dealerHand = $results['dealerHand'];
// $playerHand = $results['playerHand'];
// $deck = $results['deck'];
// $playerTotal = $results['playerTotal'];
// $dealerTotal = $results['dealerTotal'];
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

$_SESSION['results'] = [
    'deck' => $deck,
    'playerHand'=> $playerHand,
    'dealerHand'=> $dealerHand,
    'playerTotal'=> $playerTotal,
    'dealerTotal'=>$dealerTotal
];

// require 'index-view.php';
require 'index.php';