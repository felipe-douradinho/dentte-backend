<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Auth\Repositories\Eloquent\AuthRepository;
use Modules\Auth\Repositories\AuthRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Auth\Providers
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
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
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
