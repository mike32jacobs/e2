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
        $games =$this->app->db()->all('games');        
        return $this->app->view('history',['games'=>$games]);
    }

    public function game()
    {
        $id = $this->app->param('id');

        $game = $this->app->db()->findById('games', $id);
         
        // Find all of the choices with the current game
        //Create a custom command
        $sql ='SELECT * FROM choices WHERE game_id ='.$id;
        $executed = $this->app->db()->run($sql);

        # A PDO method is used to extract the results
        $choices = $executed->fetchAll();
        
        return $this->app->view('game', ['game'=>$game, 'choices'=>$choices]);
    }

    public function initialize()
    {
        // Validate user input
        $this->app->validate([
            'winning-number'=> 'min:11',
            'max-count'=>'max:5'
        ]);
        
        // Get user input from form
        $number = $this->app->input('winning-number');
        $count = $this->app->input('max-count');

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

        
        //TODO: persist these results to database. Then let the play continue.

        $this->app->db()->insert('games',[
            'winning_score' => $this->winning_score,
            'max_count'=>$this->max_count,
            // 'winner'=> 1, #We do not have a winner yet
            'player1_id'=> 1,
            'player2_id'=> 2,
            'timestamp'=> date('Y-m-d H:m:s')
        ]);

        // Find the id of the newly initialized game.

        //Create a custom command
        $sql ='SELECT COUNT(*) FROM games';
        $executed = $this->app->db()->run($sql);

        # A PDO method is used to extract the results
        $id = $executed->fetchAll();
        $id =$id[0]['COUNT(*)'];

        $game = $this->app->db()->findById('games', $id);
    
        // Find all of the choices with the current game.
        // The Choices array will be empty initially. The blade template will account for that.
        //Create a custom command
        $sql ='SELECT * FROM choices WHERE game_id ='.$id;
        $executed = $this->app->db()->run($sql);
        # A PDO method is used to extract the results
        $choices = $executed->fetchAll(); 
     
        return $this->app->view('/play', ['game'=>$game,'choices'=>$choices]);
        // return $this->app->redirect('/play', ['game'=>$game,'total'=>$this->total], );


    }
    public function process()
    {
        // Validate user input
        $this->app->validate([
            'choice'=> 'required',
        ]);
        
        // Get user input from form
        $choice = (int)$this->app->input('choice');
        $game_id = (int)$this->app->input('game_id');
        $total = (int)$this->app->input('total');

        return $this->player_move(1,$game_id,$choice );

        // // use the game_id to query the database
        // $game = $this->app->db()->findById('games', $game_id);

        // // Write the choice to the database, then update the total and turn
        // $this->app->db()->insert('choices',[
        //     'player_id' => 1,
        //     'game_id'=>$game_id,
        //     'total_before_choice'=> $total,
        //     'choice'=> $choice,
        // ]);

        // $total = $choice + $total;
        
    
        // //Check to see if the total is >= winning_score
        // if($total >= $game['winning_score']){
        //     //Game is over. The current player is the winner
        //     //Create a custom command
        //     $sql ='UPDATE games SET winner=2 WHERE id ='.$game_id.';';
        //     $this->app->db()->run($sql);
        // }
        
        // return $this->app->view('/process', ['game'=>$game,'total'=>$total]);
        // // return $this->app->redirect('/play', ['game'=>$game,'total'=>$total]);

    }

    public function play()
    {
       
       // Get data from the session
        $total=$this->app->old('total');
        $winning_score=$this->app->old('winning_score');
        $max_count=$this->app->old('max_count');

        dump($total,$winning_score,$max_count);

        $this->total = $total;
        $this->winning_score = $winning_score;
        $this->max_count=$max_count;

        dump("you are inside of the play function");
        dump($this->total);
        dump($this->winning_score);
        dump($this->max_count);
        // return $this->app->view('play');
    }

    public function player_move($player_id, $game_id,$choice)
    {
        
        //use the game id to get the information about the game so far.
        $game = $this->app->db()->findById('games', $game_id);
        
        // Find all of the choices with the current game
        //Create a custom command
        $sql ='SELECT * FROM choices WHERE game_id ='.$game_id;
        $executed = $this->app->db()->run($sql);
        # A PDO method is used to extract the results
        $choices = $executed->fetchAll();

        //If choices is empty, then this is the first move of the game. The total is zero. IF it is not empty, then find the last entry to get the previous total.
        if (empty($choices)){
            $total = 0;
        }else{
            //If choices is not empty, then see how many choices have been made so far.
            // Find how many rows are in the database
            $number_rows =count($choices);
            $total = $choices[$number_rows-1]['total'];
        }

        // update the total
        $total = $total + $choice;

        // Write the choice to the database, then update the total and turn
        $this->app->db()->insert('choices',[
            'player_id' => $player_id,
            'game_id'=>$game_id,
            'total'=> $total,
            'choice'=> $choice,
        ]);

        //update the $choices variable
        // Find all of the choices with the current game
        //Create a custom command
        $sql ='SELECT * FROM choices WHERE game_id ='.$game_id;
        $executed = $this->app->db()->run($sql);
        # A PDO method is used to extract the results
        $choices = $executed->fetchAll();
        
        return $this->app->view('/play', ['game'=>$game,'choices'=>$choices]);

    }
    
    public function advance_count($choice)
    {
        $this->total=$this->total + $choice;
    }
}