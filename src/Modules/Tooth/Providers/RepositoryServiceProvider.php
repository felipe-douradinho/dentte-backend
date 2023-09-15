<?php

namespace Modules\Tooth\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Tooth\Repositories\Eloquent\ToothRepository;
use Modules\Tooth\Repositories\ToothRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Tooth\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ToothRepositoryInterface::class, ToothRepository::class);
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
