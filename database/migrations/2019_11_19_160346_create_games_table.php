<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->integer('game_id')->comment('遊戲編號');
            $table->integer('user_id')->comment('使用者編號');
            $table->string('game_num', 10)->comment('遊戲XX');
            $table->date('game_date')->comment('遊戲日期');
            $table->enum('game_open', ['Y', 'N'])->default('N')->comment('遊戲是否開啟');
            $table->dateTime('open_time')->comment('開始時間？');
            $table->dateTime('close_time')->comment('關閉時間？');
            $table->enum('game_final', ['Y', 'N'])->default('N')->comment('遊戲完成與否');
            $table->enum('game_over', ['Y', 'N'])->default('N')->comment('遊戲結束與否');
            $table->tinyInteger('rep_stat')->comment('RepStat');
            $table->timestamp('up_time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('UPTime');
            $table->primary(['game_id', 'user_id', 'game_date']);
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
        Schema::dropIfExists('games');
    }
}
