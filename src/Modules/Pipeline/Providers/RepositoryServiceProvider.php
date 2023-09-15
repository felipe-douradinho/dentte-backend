<?php

namespace Modules\Pipeline\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Pipeline\Repositories\CardEventRepositoryInterface;
use Modules\Pipeline\Repositories\CardRepositoryInterface;
use Modules\Pipeline\Repositories\Eloquent\CardEventRepository;
use Modules\Pipeline\Repositories\Eloquent\CardRepository;
use Modules\Pipeline\Repositories\Eloquent\PipelineRepository;
use Modules\Pipeline\Repositories\Eloquent\StageRepository;
use Modules\Pipeline\Repositories\PipelineRepositoryInterface;
use Modules\Pipeline\Repositories\StageRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Pipeline\Providers
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
        $this->app->bind(PipelineRepositoryInterface::class, PipelineRepository::class);
        $this->app->bind(StageRepositoryInterface::class, StageRepository::class);
        $this->app->bind(CardRepositoryInterface::class, CardRepository::class);
        $this->app->bind(CardEventRepositoryInterface::class, CardEventRepository::class);
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
