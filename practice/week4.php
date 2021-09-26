<?php

$moves = ['rock', 'paper','scissors'];

#           1,1,2,3,4,5
$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];

// var_dump($moves);
// var_dump($move);


// #associative array
// $penny_value = .01;
// $nickel_value = .05;
// $dime_value = .10;
// $quarter_value = .25;
// $half_dollar_value = .50;

// $coin_values = [
//     'penny'=> .01, 
//     'nickel'=> .05,
//     'dime'=> .10,
//     'quarter'=> .25
// ];

// # Define 4 more variables, which will each
// # represent how many of each coin is in the bank
// $pennies = 100;
// $nickels = 25;
// $dimes = 100;
// $quarters = 34;

// $coin_counts = [
//     'penny'=> 100, 
//     'nickel'=> 25,
//     'dime'=> 100,
//     'quarter'=> 34
// ];


//var_dump($coin_values['quarter']);
// asort($coin_counts);
// arsort($coin_counts);
// ksort($coin_counts);
// krsort($coin_counts);

// var_dump($coin_counts);


// shuffle($cards);
// var_dump($cards);

$total = 0;

// foreach($coin_counts as $coin => $count){
//     $total = $total + ($count * $coin_values[$coin]);

// }

$coins = [
    'penny'=> [
        'count'=>100,
        'value'=>.01
    ] ,
    'nickel'=> [
        'count'=>25, 
        'value'=>.05
    ],
    'dime'=> [
        'count'=>100, 
        'value'=>.10
    ],
    'quarter'=> [
        'count'=>34, 
        'value'=>.25
    ],
    'halfDollar'=> [
        'count'=>10,
        'value'=>.50
    ]
];

foreach($coins as $coin => $info){
    $total = $total + ($info['count'] * $info['value']);

}



var_dump($total);

$deck = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$playerOneCards = [];
$playerTwoCards = [];

shuffle($deck);

while (count($deck) > 0) {
    $drawCard = array_shift($deck);
    var_dump($drawCard);
    array_push($playerOneCards, $drawCard);
    $drawCard = array_shift($deck);
    var_dump($drawCard);
    array_push($playerTwoCards, $drawCard);
}



var_dump($playerOneCards);
var_dump($playerTwoCards);



// $playerCards = array_splice($cards,0, count($cards) / 2 );
// $computerCards = $cards;
// // var_dump($cards);

// var_dump($playerCards);

// // $playerDraw = $playerCards[count($playerCards) - 1];
// $playerDraw = array_pop($playerCards);

// var_dump($playerCards);
// var_dump($playerDraw);

// var_dump(date('F j Y'));