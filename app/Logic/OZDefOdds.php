<?php


namespace App\Logic;


use App\GameIoratio;
use App\Interfaces\DefOdds;

class OZDefOdds implements DefOdds
{
    public function GetOdds()
    {
        // 統計是否預設值是否有值或是缺少

        // 取初始值
        Return GameIoratio::query()
            ->where('hallid',2)
            ->where('userid',2)
            ->get();
    }

    public function SetOdds()
    {

    }
}
