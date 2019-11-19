<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    protected $repository;

    public function __construct(ArticleRepository $repository)
    {
        // 除了列表頁外，其他 action 都加入驗證機制
        // 參考 App\Http\Kernel.php 裡的 $routeMiddleware
        $this->middleware('auth', ['except' => 'index']);
        $this->repository = $repository;
    }

    public function index()
    {
        $articles = $this->repository->latest10();
        return view('articles.index',compact('articles'));
    }

    public function store(ArticleRequest $request)
    {
        // 直接從 Http\Request 取得輸入資料
        $this->repository->create($request->all());

        // 導向列表頁
        return Redirect::route('articles.index');
    }

    public function create(){
        return view('articles.create');
    }
}
