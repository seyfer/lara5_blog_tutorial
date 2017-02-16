<?php

namespace App\Providers;

use App\Events\ThreadCreated;
use App\Listeners\CheckForSpam;
use App\Listeners\NotifySubscribers;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ThreadCreated::class => [
            NotifySubscribers::class,
            CheckForSpam::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
