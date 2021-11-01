<?php
require __DIR__.'/vendor/autoload.php';
use RPS\Game;

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];
    
    protected function determineOutcome($playerMove, $computerMove)
    {
        if ($computerMove == $playerMove) {
            return 'win';
        } else {
            return 'lost';
        }
    }
}