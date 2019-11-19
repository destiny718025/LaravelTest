<?php

namespace Tests\Feature;

use App\Http\Controllers\GameCenterController;
use App\Logic\OZDefOdds;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameCenterControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected $Controller = null;
    protected $DefOddsMock = null;

    public function setUp(): void
    {
        parent::setUp();

        $DefOddsClass = new OZDefOdds();

        // Mockery::mock 可以利用 Reflection 機制幫我們建立假物件
        $this->DefOddsMock = \Mockery::mock($DefOddsClass);
        $this->instance('App\Interfaces\DefOdds',$this->DefOddsMock);

        $this->Controller = new GameCenterController($this->DefOddsMock);
//        $this->Controller = new GameCenterController($DefOddsClass);
    }

    public function tearDown(): void
    {
        $this->Controller = null;
        $this->DefOddsMock = null;
    }

    public function testGetDefOdds()
    {
        // 設定回傳值
        $TestRequest = [
            'A' => [
                0 => [
                    'playcode' => 'A',
                    'number' => 0,
                    'ioratio' => 10,
                    'openswitch' => true,
                ],
                1 => [
                    'playcode' => 'A',
                    'number' => 1,
                    'ioratio' => 2,
                    'openswitch' => true,
                ]
            ]
        ];

        // 確認程式會呼叫一次 OZDefOdds::GetOdds 方法
        // 實際上是為這個 mock object 加入 GetOdds 方法
        // 沒有呼叫到的話就會發出異常
        // 再假設它會回傳 foo 這個字串
        // 這樣就不需要真的去連結資料庫
        $this->DefOddsMock
            ->shouldReceive('GetOdds')
            ->once()
            ->andReturn($TestRequest);

        $request = $this->Controller->GetDefOdds();

        $this->assertEquals($TestRequest,$request);
    }
}
