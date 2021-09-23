<?php

$moves = ['rock', 'paper','scissors'];

#           1,1,2,3,4,5
$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];

var_dump($moves);
var_dump($move);