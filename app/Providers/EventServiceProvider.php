<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Events\UserCreated::class => [
            \App\Listeners\SendDiscordNotification::class,
        ],
        \App\Events\UserUpdated::class => [
            \App\Listeners\SendDiscordNotification::class,
        ],
        \App\Events\UserDeleted::class => [
            \App\Listeners\SendDiscordNotification::class,
        ],
        \App\Events\UserRestore::class => [
            \App\Listeners\SendDiscordNotification::class,
        ],
        \App\Events\UserLogin::class => [
            \App\Listeners\SendDiscordNotification::class,
        ],
    ];

}
