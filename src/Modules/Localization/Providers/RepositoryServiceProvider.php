<?php

namespace Modules\Localization\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Localization\Repositories\CityRepositoryInterface;
use Modules\Localization\Repositories\CountryRepositoryInterface;
use Modules\Localization\Repositories\Eloquent\CityRepository;
use Modules\Localization\Repositories\Eloquent\CountryRepository;
use Modules\Localization\Repositories\Eloquent\StateRepository;
use Modules\Localization\Repositories\StateRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Localization\Providers
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
        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
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
