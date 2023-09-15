<?php

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Product\Repositories\Eloquent\ProductRepository;
use Modules\Product\Repositories\ProductRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Product\Providers
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
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
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
