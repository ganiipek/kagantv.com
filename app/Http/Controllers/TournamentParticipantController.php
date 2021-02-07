<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\User;
use App\Models\TournamentParticipant;


class TournamentParticipantController extends Controller
{
    public function joinTournament(Request $request)
    {
        $tournament = Tournament::where("id", $request->tournament_id)->first();
        $user = User::where('id', $request->user_id)
            ->with('teams')
            ->first();

        if ($tournament->type == 'ekip') {
            if (!$user->teams->count()) {
                return response()->json([
                    'error' => true,
                    'message' => 'Bu turnuvaya sadece takım liderleri başvurabilir.'
                ]);
            } else {
                if ($request->team_id) {
                    $team = Team::where('id', $request->team_id)
                        ->with('teamUsers')
                        ->first();
                    if ($tournament->team_player_count == $team->teamUsers->count()) {
                        if (TournamentParticipant::where(['user_id' => $request->user_id, 'tournament_id' => $request->tournament_id])->count() == 0) {
                            foreach($team->teamUsers as $teamUser){
                                TournamentParticipant::create([
                                    'user_id' => $teamUser->user_id,
                                    'team_id' => $request->team_id,
                                    'tournament_id' => $request->tournament_id,
                                    "created_at" => date("Y.m.d h:i:s", time()),
                                    "updated_at" => date("Y.m.d h:i:s", time())
                                ]);
                            }
                            return response()->json([
                                'error' => false,
                                'message' => $tournament->name . ' turnuvasına ' . $team->name . ' ekibi ile başvuru yaptın. Moderatörler tarafından onaylandıktan sonra bildirim gelecek.'
                            ]);
                        } else {
                            return response()->json([
                                'error' => true,
                                'message' => "Takımındaki üyelerden bazıları zaten bu turnuvaya katılmış ya da başvuru yapmış durumdadır."
                            ]);
                        }
                    } else {
                        return response()->json([
                            'error' => true,
                            'message' => $tournament->name . ' turnuvası için takımdaki üye sayısı ' . $tournament->team_player_count . ' olmalıdır. ' . $team->name . ' takımının üye sayısı ise ' . $team->teamUsers->count()
                        ]);
                    }
                }
                return response()->json([
                    'error' => true,
                    'message' => $tournament->name . ' turnuvasına katılmak için takım seçmek zorundasın!'
                ]);
            }
        } else if ($tournament->type == 'bireysel') {
            $tournamentParticipant = TournamentParticipant::where([
                'user_id' => $request->user_id,
                'tournament_id' => $request->tournament_id
            ])->first();

            if ($tournamentParticipant) {
                return response()->json([
                    'error' => true,
                    'message' => 'Bu turnuvaya zaten katıldın.'
                ]);
            } else {
                TournamentParticipant::create([
                    'user_id' => $request->user_id,
                    'tournament_id' => $request->tournament_id,
                    "created_at" => date("Y.m.d h:i:s", time()),
                    "updated_at" => date("Y.m.d h:i:s", time())
                ]);
                return response()->json([
                    'error' => false,
                    'message' => $tournament->name . ' adlı turnuvaya başvuru yaptın. Moderatörler tarafından onaylandıktan sonra bildirim gelecek.'
                ]);
            }
        }
    }

    public function leaveTournament(Request $request)
    {
        $tournamentParticipant = TournamentParticipant::where([
            'user_id' => $request->user_id,
            'tournament_id' => $request->tournament_id
        ])
            ->with('tournament')
            ->first();

        if ($tournamentParticipant) {
            if ($tournamentParticipant->approval == 2) {
                return response()->json([
                    'error' => true,
                    'message' => 'Başvurunuz reddedildikten sonra bir daha işlem yapamazsınız!'
                ]);
            } else {
                if($tournamentParticipant->tournament->type == 'bireysel'){
                    TournamentParticipant::where([
                        'user_id' => $request->user_id,
                        'tournament_id' => $request->tournament_id
                    ])->delete();
                    return response()->json([
                        'error' => false,
                        'message' => $tournamentParticipant->tournament->name . ' adlı turnuvadan başarıyla ayrıldın.'
                    ]);
                }else if($tournamentParticipant->tournament->type == 'ekip'){
                    TournamentParticipant::where([
                        'team_id' => $tournamentParticipant->team_id,
                        'tournament_id' => $request->tournament_id
                    ])->delete();
                    return response()->json([
                        'error' => false,
                        'message' => $tournamentParticipant->tournament->name . ' adlı turnuvadan başarıyla ayrıldın.'
                    ]);
                }
                
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Bu turnuvaya zaten katılmadın.'
            ]);
        }
    }

    public function acceptRejectTournament(Request $request)
    {
        $tournament = Tournament::where('id', $request->tournament_id)->first();
        if ($tournament) {
            $tournamentParticipants = TournamentParticipant::where('tournament_id', $request->tournament_id)->first();
            if ($tournamentParticipants->count <= $tournament->player_count) {
                if ($tournament->type == 'bireysel') {
                    $user = User::where('id', $request->user_id)->first();
                    if ($user) {
                        if ($request->islem == 'accept') {
                            TournamentParticipant::where([
                                'tournament_id' => $request->tournament_id,
                                'user_id' => $request->user_id
                            ])->update(['approval' => 1]);

                            return response()->json([
                                'error' => false,
                                'message' => $user->name . ' kullanıcısının başvurusu onaylandı!'
                            ]);
                        } else if ($request->islem == 'reject') {
                            TournamentParticipant::where([
                                'tournament_id' => $request->tournament_id,
                                'user_id' => $request->user_id
                            ])->update(['approval' => 2]);

                            return response()->json([
                                'error' => false,
                                'message' => $user->name . ' kullanıcısının başvurusu reddedildi!'
                            ]);
                        }
                    } else {
                        return response()->json([
                            'error' => true,
                            'message' => 'Kullanıcı bulunamadı.'
                        ]);
                    }
                } else if ($tournament->type == 'ekip') {
                    $team = Team::where('id',$request->team_id)->first();
                    if($team){
                        if ($request->islem == 'accept') {
                            TournamentParticipant::where([
                                'tournament_id' => $request->tournament_id,
                                'team_id' => $request->team_id,
                            ])->update(['approval' => 1]);

                            return response()->json([
                                'error' => false,
                                'message' => $team->name . ' takımının başvurusu onaylandı!'
                            ]);
                        } else if ($request->islem == 'reject') {
                            TournamentParticipant::where([
                                'tournament_id' => $request->tournament_id,
                                'team_id' => $request->team_id,
                            ])->update(['approval' => 2]);

                            return response()->json([
                                'error' => false,
                                'message' => $team->name . ' takımının başvurusu reddedildi!'
                            ]);
                        }
                    }else{
                        return response()->json([
                            'error' => true,
                            'message' => 'Takım bulunamadı.'
                        ]);
                    }
                }
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Turnuva doldu. Daha fazla kullanıcı ekleyemezsin.'
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Turnuva bulunamadı.'
            ]);
        }
    }
}
