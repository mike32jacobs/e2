<?php

session_start();

var_dump($_POST);
$move = $_POST;

if ($move == 'stay'){

    // player is done. Dealer's turn
    
} elseif ($move == 'hit'){

    // Give player another card
    
    // Calculate sum of cards
    $p1Total =calculate_sum($p1Hand);

    // If sum is less than 21, give the player another turn
    if ($p1Total < 21){

        // Let player go again

    } elseif ($p1Total == 21){

        //Player wins
        
    } else($p1Total > 21){

        //Player loses
    }
} elseif ($move == 'split') {

    //Check to see if player can split
    if can_split($p1Hand){
        
    }

} elseif ($move == 'double_down') {
    
    //Check to see if player can double
    if can_double_down($p1Hand){
        
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


$_SESSION['results'] = [

]