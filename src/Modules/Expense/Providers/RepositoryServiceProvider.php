<?php

namespace Modules\Expense\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Expense\Repositories\Eloquent\ExpenseCategoryRepository;
use Modules\Expense\Repositories\Eloquent\ExpenseRepository;
use Modules\Expense\Repositories\ExpenseCategoryRepositoryInterface;
use Modules\Expense\Repositories\ExpenseRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Expense\Providers
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
        $this->app->bind(ExpenseRepositoryInterface::class, ExpenseRepository::class);
        $this->app->bind(ExpenseCategoryRepositoryInterface::class, ExpenseCategoryRepository::class);
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
