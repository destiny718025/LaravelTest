<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public function gameResult()
    {
        return $this->hasOne(GameResult::class);
    }
}
