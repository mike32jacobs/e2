<?php
namespace App\Controllers;

class AppController extends Controller

{

    // Global variable to keep track of count total
    public $total;
    // Using a global variable to set the winning score. In my first iteration this is just hard-coded to 21. In future iterations, the user can choose. The smame goes for $max_count. Right now it is just two. In future iterarions, users will be able to choose the maximum amount by which a player can advnace the score.
    public $winning_score;
    public $max_count;

        /**
     * This method is triggered by the route "/"
     */
     public function index()
    {
        return $this->app->view('index');
    }

    public function history()
    {
        return $this->app->view('history');
    }

    public function round()
    {
        return $this->app->view('round');
    }

    public function initialize()
    {
        // Get user input from form
        $number = $this->app->input('winning-number');
        $count = $this->app->input('max-count');

        // dump($number, $count);

        //By default, the game is played to 21, with an ability to advance by 1 or 2. 

        if ($number == null){
            $number=25;
        }
        if ($count == null){
            $count=4;
        }


        // Set global variable to values from the unser input
        $this->total = 0;
        $this->winning_score=$number;
        $this->max_count=$count; 

        dump($this->total);
        dump($this->winning_score);
        dump($this->max_count);
        
        //TODO: persist these results to database. Then let the play continue.
        //TODO: Change the value of the global variables

        dump("you are inside of the initialize function");

        // return $this->app->view('play');

        return $this->app->redirect('play',[
            'total'=>$this->total,
            'winning_score'=>$this->winning_score,
            'max_count'=>$this->max_count
        ]);

    }
    public function process()
    {
        
        dump("you are inside of the process function");
        dump('this->total', $this->total);

        dump($this->winning_score);
        dump($this->max_count);

        $advance_count =(int)$this->app->input('choice');
        $new_total = $advance_count + $this->total;
        
        dump('$advance_count', $advance_count);

        dump('$new_total', $new_total);
        $this->total = $new_total;
        dump('this->total', $this->total);
        
        return $this->app->view('play');
    }

    public function play()
    {
        $total=$this->app->old('total');
        $winning_score=$this->app->old('winning_score');
        $max_count=$this->app->old('max_count');

        dump($total,$winning_score,$max_count);

        dump("you are inside of the play function");
        dump($this->total);
        dump($this->winning_score);
        dump($this->max_count);
        // return $this->app->view('play');
    }

    public function nerd_turn()
    {
        $choice = rand(1,$this->max_count);
        $this->advance_count($choice);
    }
    // public function new_game()
    // {
    //     ;
    // }
    public function advance_count($choice)
    {
        $this->total=$this->total + $choice;
    }
}