<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function migrate(){
        $this->app->db()->createTable('players', [
            'name' => 'varchar(16)',
        ]);

        
        $this->app->db()->createTable('games', [
            'winning_score' => 'tinyint(3)',
            'max_count' => 'tinyint(3)',
            'winner' => 'tinyint(1)',
            'player1_id'=> 'int',
            'player2_id'=> 'int',
        ]);

        $this->app->db()->createTable('choices', [
            'player_id' => 'int',
            'game_id' => 'int',
            'total_before_choice',
            'choice' => 'int', //thi will be an add 1 or add 2
        ]);
    }
}