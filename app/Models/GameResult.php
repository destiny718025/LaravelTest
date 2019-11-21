<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameResult extends Model
{
    protected $table = 'game_results';

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'game_id');
    }
}
