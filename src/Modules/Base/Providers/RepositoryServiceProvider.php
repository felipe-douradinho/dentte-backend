<?php

namespace Modules\Base\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Base\Repositories\Eloquent\BaseRepository;
use Modules\Base\Repositories\BaseRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Base\Providers
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
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
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
