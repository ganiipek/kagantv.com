<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\TeamInvitation;


class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('*', function ($view) {
            if (isset(auth()->user()->id)) {


                $teamInvitations = TeamInvitation::where('user_id', auth()->user()->id)->get();

                $view->with([
                    'teamInvitations' => $teamInvitations
                ]);
            }
        });
    }


    public function register()
    {
        //
    }
}
