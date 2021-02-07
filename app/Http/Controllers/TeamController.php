<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\TeamUser;
use App\Models\Notification;
use App\Models\TeamInvitation;


class TeamController extends Controller
{
    public function createTeam(Request $request)
    {
        $check_team_name = Team::where('name', $request->name)->first();
        $check_team_tag = Team::where('tag', $request->tag)->first();

        if ($check_team_name) {
            session(['error_code' => "1", "error_description" => trans("Bu takım ismi zaten kullanılmaktadır.")]);
            return back()->withInput();
        } else if ($check_team_tag) {
            session(['error_code' => "1", "error_description" => trans("Bu takım kısaltması zaten kullanılmaktadır.")]);
            return back()->withInput();
        } else {
            $team = Team::create([
                'user_id' => auth()->user()->id,
                'name' => $request->team_name,
                'tag' => $request->team_tag,
                'created_at' => date("Y.m.d h:i:s", time()),
                'updated_at' => date("Y.m.d h:i:s", time()),
            ]);

            TeamUser::create([
                'user_id' => auth()->user()->id,
                'team_id' => $team->id,
                'created_at' => date("Y.m.d h:i:s", time()),
                'updated_at' => date("Y.m.d h:i:s", time()),

            ]);
            session(['error_code' => "0", "error_description" => $request->team_tag . " takımı başarıyla oluşturuldu."]);
            return back()->withInput();
        }
    }

    public function editTeam(Request $request)
    {
        $check_team_name = Team::where('name', $request->name)->first();
        $check_team_tag = Team::where('tag', $request->tag)->first();

        if ($check_team_name) {
            session(['error_code' => "1", "error_description" => trans("Bu takım ismi zaten kullanılmaktadır.")]);
            return back()->withInput();
        } else if ($check_team_tag) {
            session(['error_code' => "1", "error_description" => trans("Bu takım kısaltması zaten kullanılmaktadır.")]);
            return back()->withInput();
        } else {
            $team = Team::where('id', $request->team_id)
                ->update([
                    'name' => $request->team_name,
                    'tag' => $request->team_tag,
                    'updated_at' => date("Y.m.d h:i:s", time()),
                ]);

            session(['error_code' => "0", "error_description" => $request->team_tag . " takımı başarıyla düzenlendi."]);
            return back()->withInput();
        }
    }

    public function leaveTeam(Request $request)
    {
        TeamUser::where(['user_id'=> auth()->user()->id, 'team_id'=> $request->team_id])->delete();
        $team = Team::find($request->team_id);
        session(['error_code' => "0", "error_description" => $team->name." takımından başarıyla ayrıldın."]);
        return back()->withInput();
    }

    public function kickUser(Request $request)
    {
        $teamUser = TeamUser::where('id',$request->teamUser_id)->with('team','user')->first();
        TeamUser::where('id',$request->teamUser_id)->delete();
        return response()->json([
            'error' => false,
            'message' => 'oyuncusu takımdan atıldı!',
            'teamUser' => $teamUser
        ]);
    }

    public function deleteTeam(Request $request)
    {
        $team = Team::find($request->team_id);
        TeamUser::where(['team_id'=> $request->team_id])->delete();
        TeamInvitation::where(['team_id'=> $request->team_id])->delete();
        Team::where(['id'=> $request->team_id])
            ->update([
                'user_id' => null,
                'active' => 0
            ]);

        session(['error_code' => "0", "error_description" => $team->name." takımı başarıyla silindi."]);
        return back()->withInput();
    }

    public function sendInvitation(Request $request)
    {
        try{
        $user = User::find($request->user_id);
        $team_user = TeamUser::where(['user_id' => $request->user_id, 'team_id' => $request->team_id])->first();
        $invatition = TeamInvitation::where(['user_id' => $request->user_id, 'team_id' => $request->team_id])->first();
        if ($request->user_id == null) {
            return response()->json([
                'error' => true,
                'message' => 'Takımına davet etmek istediğin oyuncuyu seç!'
            ]);
        } else if (!$user) {
            return response()->json([
                'error' => true,
                'message' => 'Böyle bir oyuncu bulunamadı!'
            ]);
        } else if ($team_user) {
            return response()->json([
                'error' => true,
                'message' => 'Bu oyuncu zaten takımında bulunmaktadır!'
            ]);
        } else if ($invatition) {
            return response()->json([
                'error' => true,
                'message' => 'Bu oyuncu zaten davet edildi!'
            ]);
        }

        Notification::create([
            'user_id' => $request->user_id,
            'type_id' => 1,
            'body' => $request->invitation_text,
            'created_at' => date("Y.m.d h:i:s", time()),
            'updated_at' => date("Y.m.d h:i:s", time()),
        ]);

        TeamInvitation::create([
            'user_id' => $request->user_id,
            'team_id' => $request->team_id,
            'created_at' => date("Y.m.d h:i:s", time()),
            'updated_at' => date("Y.m.d h:i:s", time()),
        ]);
        return response()->json([
            'error' => false,
            'message' => 'oyuncusuna davet gönderildi!',
            'user' => $user,
            'request' => $request->input()
        ]);
    }catch(QueryException $exception){
        return response()->json([
            'error' => true,
            'message' => "Hata kodu:".$exception->errorInfo[0]." Hata: ".$exception->errorInfo[2]
        ]);
    }
    }

    public function acceptInvitation(Request $request)
    {
        $teamInvatition = TeamInvitation::where('id', $request->teamInvitation_id)
            ->with(['team', 'user'])
            ->first();

        if (TeamUser::where(['team_id' => $teamInvatition->team->id, 'user_id' => $teamInvatition->user->id])->first()) {
            session(['error_code' => "1", "error_description" => "Zaten bu takıma üyesin!"]);
            return back()->withInput();
        } else if (!Team::where('id', $teamInvatition->team->id)->first()) {
            session(['error_code' => "1", "error_description" => "Takım bulunamadı!"]);
            return back()->withInput();
        } else if (TeamUser::where(['team_id' => $teamInvatition->team->id])->count() >= 4){
            session(['error_code' => "1", "error_description" => "Bir takımda en fazla 4 oyuncu bulunabilir!"]);
            return back()->withInput();
        }

        TeamUser::create([
            'user_id' => auth()->user()->id,
            'team_id' => $teamInvatition->team->id,
            'created_at' => date("Y.m.d h:i:s", time()),
            'updated_at' => date("Y.m.d h:i:s", time()),
        ]);

        TeamInvitation::find($request->teamInvitation_id)->delete();

        session(['error_code' => "0", "error_description" => $teamInvatition->team->name . " takımına başarıyla katıldın."]);
        return back()->withInput();
    }

    public function rejectInvitation(Request $request)
    {
        $teamInvatition = TeamInvitation::where('id', $request->teamInvitation_id)
            ->with(['team', 'user'])
            ->first();
        TeamInvitation::where('id', $request->teamInvitation_id)->delete();

        session(['error_code' => "1", "error_description" => $teamInvatition->team->name . " takımının daveti reddedildi."]);
        return back()->withInput();
    }
}
