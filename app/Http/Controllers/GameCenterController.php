<?php

namespace App\Http\Controllers;

use App\Interfaces\DefOdds;
use App\Interfaces\GameInterface;
use Illuminate\Http\Request;

class GameCenterController extends Controller
{
    protected $DefOdds;
    protected $game;

    public function __construct(DefOdds $defOdds, GameInterface $game)
    {
        $this->DefOdds = $defOdds;
        $this->game = $game;
    }

    // 取初始賠率
    public function GetDefOdds()
    {
        return $this->DefOdds->GetOdds();
    }

    // 取當日已開講期數和結果
    public function getGameAndResultFromDate($GameDate)
    {
        return $this->game->getGameAndResultFromDate($GameDate);
    }

    // 新增當日期數
    public function CreateGame()
    {

    }
}
