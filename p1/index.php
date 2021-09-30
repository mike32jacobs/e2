<?php

// + _Create an array for a deck of cards._
// + _The "deck" array should hold 4 different arrays. One for each suit._
$deck = [
    0=> [
        'name'=>'2',
        'suit'=>'hearts',
        'value'=>2
    ] ,
    1 => [
        'name'=>'3',
        'suit'=>'hearts',
        'value'=>3
    ] ,
    2 => [
        'name'=>'4',
        'suit'=>'hearts',
        'value'=>4
    ] ,
    3 => [
        'name'=>'5',
        'suit'=>'hearts',
        'value'=>5
    ] ,
    4 => [
        'name'=>'6',
        'suit'=>'hearts',
        'value'=>6
    ] ,
    5=> [
        'name'=>'7',
        'suit'=>'hearts',
        'value'=>7
    ] ,
    6=> [
        'name'=>'8',
        'suit'=>'hearts',
        'value'=>8
    ] ,
    7=> [
        'name'=>'9',
        'suit'=>'hearts',
        'value'=>9
    ] ,
    8=> [
        'name'=>'10',
        'suit'=>'hearts',
        'value'=>10
    ] ,
    9=> [
        'name'=>'J',
        'suit'=>'hearts',
        'value'=>11
    ] ,
    10=> [
        'name'=>'Q',
        'suit'=>'hearts',
        'value'=>12
    ] ,
    11=> [
        'name'=>'K',
        'suit'=>'hearts',
        'value'=>13
    ] ,
    12=> [
        'name'=>'A',
        'suit'=>'hearts',
        'value'=>14
    ] ,
];
$cardName = $deck[0]['name'];
$cardSuit = $deck[0]['suit'];

echo $deck[0]['name'];
// var_dump($deck);
// + _Shuffle the "deck."_
shuffle($deck);
// Create an array for each player's hand
$player1Hand = [];
$player2Hand = [];

$dealTo ='player1';

while (count($deck) > 0) {
    if($dealTo == 'player1'){
        $drawCard = array_shift($deck);
        array_push($player1Hand, $drawCard);
    }
    
    $drawCard = array_shift($deck);
    array_push($player2Hand, $drawCard);
}

var_dump($player1Hand);
var_dump($player2Hand);

// + _Create an array for each player. Call them Player1Hand and Player2Hand._
// + _Deal 26 cards to each player. Do this by running a while loop._
// + _Create a variable drawCard._

// + _Play the game until one player has zero cards left. I will use a while loop to accomplish this._

// + _use array_shift to take the first card off, and then push it onto the appropriate playerhand._
// + _Once both players have their cards, they should take the card off the top, and place it on the board._
// + _Compare the values of player1Card and player2Card. The interesting thing will be how to compare cards. Each card should have a numerical value. The key for each card will be the name. "jack" has a value of 11. "ace" has a value of 14._
// + _The result of the comparison will either add cards to one of the player's hands or discard them._
// + _ There will also be a display of the result of each hand _
// + _A new row in the table will be created for each round._
// + _The table row will display player1Card, player2Card, result, and the number of cards in each players' hand._
// + _There will be a global variable to count the number of rounds.
// + _There will a display which tells the reader the winner.
 

require 'index-view.php';