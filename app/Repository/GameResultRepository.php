<?php


namespace App\Repository;


use App\Models\GameResult;

class GameResultRepository
{
    public function GetGameResult(array $attributes)
    {
        return GameResult::query()->whereIn('game_id',$attributes)->get();
    }
}
