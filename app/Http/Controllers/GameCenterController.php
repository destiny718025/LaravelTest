<?php

namespace App\Http\Controllers;

use App\Interfaces\DefOdds;
use App\Interfaces\GameInterface;
use Illuminate\Http\Request;

class GameCenterController extends Controller
{
    protected $defOdds;
    protected $game;

    public function __construct(DefOdds $defOdds, GameInterface $game)
    {
        $this->defOdds = $defOdds;
        $this->game = $game;
    }

    // 取初始賠率
    public function getDefOdds()
    {
        return $this->defOdds->GetOdds();
    }

    // 取當日已開講期數和結果
    public function getGameAndResultFromDate($GameDate)
    {
        return $this->game->getGameAndResultFromDate($GameDate);
    }

    // 新增當日期數
    public function createGame()
    {

    }
}
