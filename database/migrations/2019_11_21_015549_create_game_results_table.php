<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGameResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_results', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('遊戲結果序號');
            $table->integer('game_id')->comment('遊戲編號');
            $table->tinyInteger('num1')->comment('第1碼');
            $table->tinyInteger('num2')->comment('第2碼');
            $table->tinyInteger('num3')->comment('第3碼');
            $table->tinyInteger('num4')->comment('第4碼');
            $table->unique(['game_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_results');
    }
}
