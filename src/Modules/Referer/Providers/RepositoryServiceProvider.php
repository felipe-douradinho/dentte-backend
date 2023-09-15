<?php

namespace Modules\Referer\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Referer\Repositories\Eloquent\RefererRepository;
use Modules\Referer\Repositories\RefererRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Referer\Providers
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
        $this->app->bind(RefererRepositoryInterface::class, RefererRepository::class);
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
