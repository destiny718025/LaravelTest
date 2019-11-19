<?php

namespace App\Http\Controllers;

use App\Interfaces\DefOdds;
use Illuminate\Http\Request;

class GameCenterController extends Controller
{
    protected $defOdds;

    public function __construct(DefOdds $defOdds)
    {
        $this->defOdds = $defOdds;
    }

    // 取初始賠率
    public function GetDefOdds()
    {
        return $this->defOdds->GetOdds();
    }
}
