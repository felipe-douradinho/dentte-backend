<?php

namespace Modules\Cash\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Cash\Repositories\Eloquent\CashRepository;
use Modules\Cash\Repositories\CashRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Cash\Providers
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
        $this->app->bind(CashRepositoryInterface::class, CashRepository::class);
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
