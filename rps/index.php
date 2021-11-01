<?php
require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use App\Debug;

$game = new Game(true,4);
$game->play('scissors');
$results = $game->getResults();

// var_dump($game);
var_dump($results);
var_dump($results[2]['outcome']);


// var_dump($results['outcome']);
// var_dump($game->getResults());

// $game = new Game();
// $results =$game->play('rock');
// $playerMove = $results['player'];
// $computerMove= $results['computer'];
// $outcome = $results['outcome'];

// var_dump($playerMove);
// var_dump($computerMove);
// var_dump($outcome);

// var_dump($playerMove);

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
// Debug::dump($game->play('rock'));


require 'index-view.php';