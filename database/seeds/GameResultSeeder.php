<?php

use Illuminate\Database\Seeder;

class GameResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (array_fill(1, 20, 1) as $key => $item) {
            factory(\App\Models\GameResult::class)->create([
                'game_id' => $key,
            ]);
        }
    }
}
