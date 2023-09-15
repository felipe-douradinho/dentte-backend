<?php

namespace Modules\Quote\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Quote\Repositories\Eloquent\QuoteItemRepository;
use Modules\Quote\Repositories\Eloquent\QuoteRepository;
use Modules\Quote\Repositories\QuoteItemRepositoryInterface;
use Modules\Quote\Repositories\QuoteRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Quote\Providers
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
        $this->app->bind(QuoteRepositoryInterface::class, QuoteRepository::class);
        $this->app->bind(QuoteItemRepositoryInterface::class, QuoteItemRepository::class);
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
