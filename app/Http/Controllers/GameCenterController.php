<?php

namespace App\Http\Controllers;

use App\Interfaces\DefOdds;
use App\Interfaces\GameInterface;
use Illuminate\Http\Request;

class GameCenterController extends Controller
{
    protected $DefOdds;
    protected $Game;

    public function __construct(DefOdds $defOdds,GameInterface $game)
    {
        $this->DefOdds = $defOdds;
        $this->Game = $game;
    }

    // 取初始賠率
    public function GetDefOdds()
    {
        return $this->DefOdds->GetOdds();
    }

    // 取當日已開講期數和結果
    public function GetGameAndResultFromDate($GameDate)
    {
        return $this->Game->GetGameAndResultFromDate($GameDate);
    }

    // 新增當日期數
    public function CreateGame()
    {

    }
}
