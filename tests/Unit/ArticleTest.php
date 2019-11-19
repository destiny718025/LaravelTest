<?php

namespace Tests\Unit;

use App\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmptyResult()
    {
        // 取得所有文章
        $articles = Article::all();
        // 確認 $articles 是 Collection
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$articles);

        // 而文章數為 0
        $this->assertEquals(0,count($articles));
    }

    public function testCreateAndList(){
        // 新增10筆資料
        for($i=1;$i<=10;$i++){
            Article::create([
                'title' => 'title ' . $i,
                'body' => 'body ' . $i,
            ]);
        }

        // 確認有10筆資料
        $articles = Article::all();
        $this->assertEquals(10,count($articles));
    }
}
