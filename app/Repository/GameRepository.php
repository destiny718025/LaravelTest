<?php


namespace App\Repository;


use App\Models\Game;

class GameRepository
{
    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function GetGameFromDate(string $attributes)
    {
        return Game::query()->where('game_date',$attributes)->get();
    }

    public function listGameByDate(string $gameDate)
    {
        return $this->game
            ->select('game_id', 'game_num', 'open_time', 'close_time')
            ->where('game_date', '=', $gameDate)
            ->with(['gameResult'])
            ->get();
    }

    public function listGameByDate2(string $gameDate)
    {
        return $this->game
            ->select('games.game_num','games.open_time','games.close_time','game_results.num1','game_results.num2','game_results.num3','game_results.num4')
            ->join('game_results', 'games.game_id', '=', 'game_results.game_id')
            ->where('game_date', '=', $gameDate)
            ->get();
    }
}
