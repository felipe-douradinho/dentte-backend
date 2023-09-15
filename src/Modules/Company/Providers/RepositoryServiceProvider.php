<?php

namespace Modules\Company\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Company\Repositories\Eloquent\CompanyRepository;
use Modules\Company\Repositories\CompanyRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Company\Providers
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
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
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
