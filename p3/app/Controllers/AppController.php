<?php
namespace App\Controllers;

class AppController extends Controller

{
    /**
     * This method is triggered by the route "/"
     */
    
    // Global variable to keep track of count total
    public $total;
    // Using a global variable to set the winning score. In my first iteration this is just hard-coded to 21. In future iterations, the user can choose. The smame goes for $max_count. Right now it is just two. In future iterarions, users will be able to choose the maximum amount by which a player can advnace the score.
    public $winning_score;
    public $max_count;

    
     public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }
    public function initialize()
    {
        // Get user input from form
        $number = $this->app->input('winning-number');
        $count = $this->app->input('max-count');

        // dump($number, $count);

        //By default, the game is played to 21, with an ability to advance by 1 or 2. 

        if ($number == null){
            $number=21;
        }
        if ($count == null){
            $count=2;
        }


        // Set global variable to values from the unser input
        $this->total = 0;
        $this->winning_score=$number;
        $this->max_count=$count; 

        dump($this->total);
        dump($this->winning_score);
        dump($this->max_count);
        

        // After the initialization is successful we should redirect the user back to the game page and pass those values
        return $this->app->redirect('/',[
            'total'=>$this->total,
            'winning_score'=>$this->winning_score,
            'max_count'=>$this->max_count
        ]);

    }
    public function process()
    {

        $choice = $this->app->input('choice');
        dump($choice);
        dump($this->total);
        dump($this->winning_score);
        dump($this->max_count);

        // return $this->app->redirect('/',[
        //     'choice'=>$choice,
        //     'total'=>$this->total,
        //     'winning_score'=>$this->winning_score,
        //     'max_count'=>$this->max_count
        // ]);
        
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