<?php

namespace Modules\Chair\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Chair\Repositories\Eloquent\ChairRepository;
use Modules\Chair\Repositories\ChairRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Chair\Providers
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
        $this->app->bind(ChairRepositoryInterface::class, ChairRepository::class);
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
