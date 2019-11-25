<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (array_fill(1, 20, 1) as $key => $item) {
            $gameId = factory(\App\Models\Game::class)->create([
                'id' => $key,
                'game_num' => $key
            ])->id;

            factory(\App\Models\GameResult::class)->create([
                'game_id' => $gameId,
            ]);
        }
    }
}
