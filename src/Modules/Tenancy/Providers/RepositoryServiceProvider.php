<?php

namespace Modules\Tenancy\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Tenancy\Repositories\Eloquent\TenantRepository;
use Modules\Tenancy\Repositories\TenantRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Tenancy\Providers
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
        $this->app->bind(TenantRepositoryInterface::class, TenantRepository::class);
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
