<?php

namespace App\Http\Controllers;

use App\Models\Tournament;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

class TournamentController extends Controller
{
    public function createTournament(Request $request)
    {
        //dd(Carbon::createFromTimeString($request->tournament_start_time, 'Europe/Istanbul')->timestamp,time());
        try {
            $tournament = Tournament::create([
                "user_id" => auth()->user()->id,
                "name" => $request->tournament_name,
                "type" => $request->tournament_type,
                "player_count" => $request->tournament_player_count,
                "team_count" => $request->tournament_team_count,
                "team_player_count" => $request->tournament_team_player_count,
                "award" => $request->tournament_award,
                "rules" => $request->tournament_rules,
                "starting_date" => Carbon::createFromTimeString($request->tournament_start_time, 'Europe/Istanbul')->translatedFormat('Y-m-d H:i:s'),
                "created_at" => date("Y.m.d h:i:s", time()),
                "updated_at" => date("Y.m.d h:i:s", time()),
            ]);
            session(['error_code' => "0", "error_description" => trans("Turnuva başarıyla oluşturuldu!")]);
            return back()->withInput();
        } catch (QueryException $exception) {
            //dd($exception);
            session(['error_code' => "1", "error_description" => "Hata kodu:".$exception->errorInfo[0]." Hata: ".$exception->errorInfo[2]]);
            return back()->withInput();
        }
    }
}
