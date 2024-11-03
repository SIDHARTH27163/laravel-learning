<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Contracts\TwoFactorChallengeViewResponse;
use App\Http\Responses\CustomTwoFactorChallengeViewResponse;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind the interface to your custom implementation
        $this->app->bind(TwoFactorChallengeViewResponse::class, CustomTwoFactorChallengeViewResponse::class);
        Paginator::useBootstrap();
    }

    public function boot()
    {
        //
    }
}
