<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FbController;
use App\Models\Giveaway;
use App\Models\User;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\TeamInvitation;
use App\Models\Tournament;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/privacy-and-data-protection', function () {
    return view('privacy_and_dataProtection');
})->name('privacy_and_dataProtection');

Route::get('/terms-of-service', function () {
    return view('terms_of_service');
})->name('terms_of_service');

Route::get('/user-data-deletion', function () {
    return view('user_data_deletion');
})->name('user_data_deletion');

Route::get('/how-to-install-pubg-mobile-emulator', function () {
    return view('install_emulator');
})->name('install_emulator');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/auth/facebook', [FbController::class, 'redirectToFacebook'])->name('auth.facebook');

Route::get('/auth/facebook/callback', [FbController::class, 'facebookSignin']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/dashboard')->group(function () {

        Route::prefix('/team')->group(function () {
            Route::get('/create', function () {
                return view('team.create_team');
            })->name('team.create_team');
            Route::post('/create_team', 'App\Http\Controllers\TeamController@createTeam');
            Route::post('/edit_team', 'App\Http\Controllers\TeamController@editTeam');
            Route::post('/send_invitation', 'App\Http\Controllers\TeamController@sendInvitation');



            Route::get('/request', function () {
                $teamInvitations = TeamInvitation::where('user_id', auth()->user()->id)->with('team', 'team.user')->get();
                return view('team.team_request', ['teamInvitations' => $teamInvitations]);
            })->name('team.team_request');
            Route::get('/accept_invitation', 'App\Http\Controllers\TeamController@acceptInvitation');
            Route::get('/reject_invitation', 'App\Http\Controllers\TeamController@rejectInvitation');

            Route::get('/joined', function () {
                $users = User::whereNotNull('pubgmobile_id')
                    ->get();

                $teamUsers = TeamUser::where('user_id', auth()->user()->id)
                    ->with('team', 'team.teamUsers', 'team.user', 'team.teamUsers')
                    ->get();
                return view('team.joined_team', ['teamUsers' => $teamUsers, 'users' => $users]);
            })->name('team.joined_team');
            Route::get('/leave-team', 'App\Http\Controllers\TeamController@leaveTeam');
            Route::post('/kick-user', 'App\Http\Controllers\TeamController@kickUser');
            Route::get('/delete-team', 'App\Http\Controllers\TeamController@deleteTeam');
        });

        Route::prefix('giveaway')->group(function () {
            Route::get('/create', function () {
                if (auth()->user()->admin)
                    return view('giveaway.create_giveaway');
                else
                    return view('dashboard');
            })->name('giveaway.create_giveaway');
            Route::post('/create-giveaway', 'App\Http\Controllers\GiveawayController@createGiveaway');

            Route::get('/attend', function () {
                $giveaways = Giveaway::with('user')->get();
                return view('giveaway.attend_giveaway',['giveaways' => $giveaways]);
            })->name('giveaway.attend_giveaway');
        });



        Route::prefix('tournament')->group(function () {
            Route::get('/create', function () {
                if (auth()->user()->admin)
                    return view('tournament.create_tournament');
                else
                    return view('dashboard');
            })->name('tournament.create_tournament');
            Route::post('/create-tournament', 'App\Http\Controllers\TournamentController@createTournament');

            Route::get('/attend', function () {
                $tournaments = Tournament::where('active', 1)->with('user', 'tournamentParticipants', 'tournamentParticipants.user', 'tournamentParticipants.team', 'tournamentParticipants.team.teamUsers', 'tournamentParticipants.team.teamUsers.user')->orderBy("id", "DESC")->paginate(20);
                $user = User::where(['id' => auth()->user()->id])->with('teams')->first();
                //dd($tournaments->first()->tournamentParticipants->where('approval',0)->groupBy('team_id'));
                return view('tournament.attend_tournament', [
                    'tournaments' => $tournaments,
                    'user' => $user
                ]);
            })->name('tournament.attend_tournament');
            Route::post("/join-tournament", "App\Http\Controllers\TournamentParticipantController@joinTournament");
            Route::post("/leave-tournament", "App\Http\Controllers\TournamentParticipantController@leaveTournament");
            Route::post("/accept-reject-tournament", "App\Http\Controllers\TournamentParticipantController@acceptRejectTournament");




            Route::get('/attended', function () {
                return view('tournament.attended_tournament');
            })->name('tournament.attended_tournament');

            Route::get('/all', function () {
                $tournaments = Tournament::with('user', 'tournamentParticipants')->orderBy("id", "DESC")->paginate(20);
                $user = User::where(['id' => auth()->user()->id])->with('teams')->first();
                $all_users = User::all();
                $all_teams = Tournament::all();
                return view('tournament.all_tournament', [
                    'tournaments' => $tournaments,
                    'user' => $user,
                    'all_users' => $all_users,
                    'all_teams' => $all_teams
                ]);
            })->name('tournament.all_tournament');
        });
    });
});
