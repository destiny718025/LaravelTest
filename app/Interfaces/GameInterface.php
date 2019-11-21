<?php


namespace App\Interfaces;


interface GameInterface
{
    public function GetGameAndResultFromDate(string $attributes);

    public function CreateGame();
}
