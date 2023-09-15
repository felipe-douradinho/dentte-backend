<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\User\Repositories\Eloquent\UserRepository;
use Modules\User\Repositories\UserRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\User\Providers
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
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
