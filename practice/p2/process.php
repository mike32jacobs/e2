<?php

session_start();

require 'functions.php';

$results = $_SESSION['results'];
$deck = $results['deck'];
$dealerHand = $results['dealerHand'];
$playerHand = $results['playerHand'];
$playerTotal = $results['playerTotal'];
$dealerTotal = $results['dealerTotal'];

$move = $_POST['move'];

// Game logic
if ($move == 'hit') {
    $playerHand = deal_to_player($playerHand, 1);
    $playerTotal = calculate_total($playerHand);
}

// Check the player total. If they "stay and have a total of less than 21, then it is the dealer's turn.

if ($playerTotal < 21){   
    dealer_turn();
}

$winner= check_winner();
var_dump($winner);

$_SESSION['results'] = [
    'move' => $move,
    'deck' => $deck,
    'playerHand' => $playerHand,
    'dealerHand' => $dealerHand,
    'playerTotal' => $playerTotal,
    'dealerTotal' => $dealerTotal,
    'winner' => $winner
];

header('Location: index.php');