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

if ($move == 'hit') {
    $playerHand = deal_to_player($playerHand, 1);
    $playerTotal = calculate_total($playerHand);
}

$_SESSION['results'] = [
    'move' => $move,
    'deck' => $deck,
    'playerHand' => $playerHand,
    'dealerHand' => $dealerHand,
    'playerTotal' => $playerTotal,
    'dealerTotal' => $dealerTotal
];

header('Location: index.php');