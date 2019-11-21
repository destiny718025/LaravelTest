<?php


namespace App\Interfaces;


interface GameInterface
{
    public function getGameAndResultFromDate(string $attributes);

    public function CreateGame();
}
