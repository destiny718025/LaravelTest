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
        foreach (array_fill(1, 100, 1) as $key => $item) {
            factory(\App\Models\Game::class)->create([
                'game_id' => $key,
                'user_id' => $item,
            ]);
        }
    }
}
