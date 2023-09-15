<?php

namespace Modules\Plan\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Plan\Repositories\Eloquent\PlanRepository;
use Modules\Plan\Repositories\PlanRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Plan\Providers
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
        $this->app->bind(PlanRepositoryInterface::class, PlanRepository::class);
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
