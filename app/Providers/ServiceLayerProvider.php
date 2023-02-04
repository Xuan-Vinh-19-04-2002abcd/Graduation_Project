<?php

namespace App\Providers;
use App\Services\Implementations\AccountService;
use App\Services\Implementations\MailService;
use App\Services\Implementations\PitchService;
use App\Services\Implementations\PostService;
use App\Services\Implementations\BookingService;
use App\Services\Implementations\MatchService;
use App\Services\Implementations\ReviewService;
use App\Services\Interfaces\IAccountService;
use App\Services\Interfaces\IMailService;
use App\Services\Interfaces\IPitchService;
use App\Services\Interfaces\IPostService;
use App\Services\Interfaces\IBookingService;
use App\Services\Interfaces\IMatchService;
use App\Services\Interfaces\IReviewService;
use Illuminate\Support\ServiceProvider;
class ServiceLayerProvider extends ServiceProvider
{
    /**
     * Register services.   
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IAccountService::class,
            AccountService::class
        );
        $this->app->singleton(
            IMailService::class,
            MailService::class
        );
        $this->app->singleton(
            IPitchService::class,
            PitchService::class
        );
        $this->app->singleton(
            IPostService::class,
            PostService::class
        );
        $this->app->singleton(
            IBookingService::class,
            BookingService::class
        );
        $this->app->singleton(
            IMatchService::class,
            MatchService::class
        );
        $this->app->singleton(
            IReviewService::class,
            ReviewService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}