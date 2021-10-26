<?php
include 'process.php';

session_start();
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
// if(is_null($_SESSION['results'])){
    
// }else {
//     $results = $_SESSION['results'];
//     $dealerHand = $results['dealerHand'];
//     $playerHand = $results['playerHand'];
//     $deck = $results['deck'];
//     $playerTotal = $results['playerTotal'];
//     $dealerTotal = $results['dealerTotal'];

//     $_SESSION['results'] = null;
// }



// if(!is_null($_SESSION['results'])){
// if(isset($_SESSION['results'])){



// user defined function to build a deck



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