<?php

namespace App\Providers;

use App\Http\Controllers\GameCenterController;
use App\Interfaces\GameInterface;
use App\Logic\OZGame;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\DefOdds','App\Logic\OZDefOdds');
        $this->app->when(GameCenterController::class)
            ->needs(GameInterface::class)
            ->give(OZGame::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
