<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FbController;
use App\Models\User;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\TeamInvitation;

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
            Route::post('/create_team','App\Http\Controllers\TeamController@createTeam');
            Route::post('/edit_team','App\Http\Controllers\TeamController@editTeam');
            Route::post('/send_invitation','App\Http\Controllers\TeamController@sendInvitation');

            

            Route::get('/request', function () {
                $teamInvitations = TeamInvitation::where('user_id',auth()->user()->id)->with('team','team.user')->get();
                return view('team.team_request',['teamInvitations'=>$teamInvitations]);
            })->name('team.team_request');
            Route::get('/accept_invitation','App\Http\Controllers\TeamController@acceptInvitation');
            Route::get('/reject_invitation','App\Http\Controllers\TeamController@rejectInvitation');

            Route::get('/joined', function () {
                $users = User::whereNotNull('pubgmobile_id')
                    ->get();
                
                $teamUsers = TeamUser::where('user_id',auth()->user()->id)
                    ->with('team','team.teamUsers','team.user','team.teamUsers')
                    ->get();
                return view('team.joined_team',['teamUsers' => $teamUsers, 'users' => $users]);
            })->name('team.joined_team');
            Route::get('/leave_team','App\Http\Controllers\TeamController@leaveTeam');
            Route::post('/kick_user','App\Http\Controllers\TeamController@kickUser');
            Route::get('/delete_team','App\Http\Controllers\TeamController@deleteTeam');

        });

        Route::prefix('tournament')->group(function () {
            Route::get('/create', function () {
                if(auth()->user()->admin) 
                    return view('tournament.create_tournament');
                else 
                    return view('dashboard');
            })->name('tournament.create_tournament');

            Route::get('/attend', function () {
                return view('tournament.attend_tournament');
            })->name('tournament.attend_tournament');

            Route::get('/all', function () {
                return view('tournament.tournament_index');
            })->name('tournament.all_tournament');

            Route::get('/attended', function () {
                return view('tournament.tournament_index');
            })->name('tournament.attended_tournament');

        });
    });
});
