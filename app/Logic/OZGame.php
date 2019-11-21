<?php


namespace App\Logic;


use App\Interfaces\GameInterface;
use App\Models\Game;
use App\Repository\GameRepository;
use App\Repository\GameResultRepository;

class OZGame implements GameInterface
{
    protected $GameRepository;
    protected $GameResultRepository;

    public function __construct(GameRepository $gameRepository,GameResultRepository $gameResultRepository)
    {
        $this->GameRepository = $gameRepository;
        $this->GameResultRepository = $gameResultRepository;
    }

    public function GetGameAndResultFromDate(string $attributes)
    {
        $result = Game::query()->where('game_date',$attributes)
            ->join('game_results','games.game_id','=','game_results.game_id')
            ->select('games.game_num','games.open_time','games.close_time','game_results.num1','game_results.num2','game_results.num3','game_results.num4')
            ->get();

//        $GameInfo = $this->GameRepository->GetGameFromDate($attributes);

//        foreach($GameInfo as $key => $value){
//            $GameID[$key] = $value['game_id'];
//            $Game[$value['game_id']]['GameNum'] = $value['game_num'];
//            $Game[$value['game_id']]['OpenTime'] = $value['open_time'];
//            $Game[$value['game_id']]['CloseTime'] = $value['close_time'];
//        }

//        $ResultInfo = $this->GameResultRepository->GetGameResult($GameID);
//        foreach ($ResultInfo as $key => $value){
//            if(isset($Game[$value['game_id']])){
//                $Game[$value['game_id']]['Num1'] = $value['num1'];
//                $Game[$value['game_id']]['Num2'] = $value['num2'];
//                $Game[$value['game_id']]['Num3'] = $value['num3'];
//                $Game[$value['game_id']]['Num4'] = $value['num4'];
//            }
//        }

        return response()->json($result);
    }

    public function CreateGame()
    {

    }
}
