<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Giveaway;


class GiveawayController extends Controller
{
    public function createGiveaway(Request $request){
       //dd($request->input());
        try{
            Giveaway::create([
                'user_id' => auth()->user()->id,
                'name' => $request->giveaway_name,
                'award' => $request->giveaway_award,
                'is_follower' => $request->likepage_checkbox == 'on' ? '1':'0',
                'is_like_stream' => $request->livestream_checkbox == 'on' ? '1':'0',
                'stream_link' => $request->live_stream_link,
                "starting_date" => Carbon::createFromTimeString($request->giveaway_start_time, 'Europe/Istanbul')->translatedFormat('Y-m-d H:i:s'),
                "created_at" => date("Y.m.d h:i:s", time()),    
                "updated_at" => date("Y.m.d h:i:s", time())
            ]);
            session(['error_code' => "0", "error_description" => "Çekiliş başarıyla oluşturuldu!"]);
            return back()->withInput();
        }catch (QueryException $exception) {
            session(['error_code' => "1", "error_description" => "Hata kodu:".$exception->errorInfo[0]." Hata: ".$exception->errorInfo[2]]);
            return back()->withInput();
        }
      
    }
}
