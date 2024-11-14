<?php

namespace App\Providers;

use http\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite; // Importar Socialite
use SocialiteProviders\Discord\DiscordExtendSocialite; // Importar DiscordExtendSocialite
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        Blade::component('layouts.partials.header', 'header');
        Blade::component('layouts.partials.sidebar', 'sidebar');
        Blade::component('layouts.partials.profile', 'profile');
    }
}
