<?php


namespace App\Repository;


use App\Models\Game;

class GameRepository
{
    public function GetGameFromDate(string $attributes)
    {
        return Game::query()->where('game_date',$attributes)->get();
    }
}
