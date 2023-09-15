<?php

namespace Modules\Stock\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Stock\Repositories\Eloquent\StockRepository;
use Modules\Stock\Repositories\StockRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Stock\Providers
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
        $this->app->bind(StockRepositoryInterface::class, StockRepository::class);
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
