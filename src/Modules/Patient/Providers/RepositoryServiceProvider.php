<?php

namespace Modules\Patient\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Patient\Repositories\Eloquent\PatientAddressRepository;
use Modules\Patient\Repositories\Eloquent\PatientDocumentRepository;
use Modules\Patient\Repositories\Eloquent\PatientPhoneRepository;
use Modules\Patient\Repositories\Eloquent\PatientPlanRepository;
use Modules\Patient\Repositories\Eloquent\PatientRepository;
use Modules\Patient\Repositories\Eloquent\PatientSponsorRepository;
use Modules\Patient\Repositories\PatientAddressRepositoryInterface;
use Modules\Patient\Repositories\PatientDocumentRepositoryInterface;
use Modules\Patient\Repositories\PatientPhoneRepositoryInterface;
use Modules\Patient\Repositories\PatientPlanRepositoryInterface;
use Modules\Patient\Repositories\PatientRepositoryInterface;
use Modules\Patient\Repositories\PatientSponsorRepositoryInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package Modules\Patient\Providers
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
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(PatientDocumentRepositoryInterface::class, PatientDocumentRepository::class);
        $this->app->bind(PatientPhoneRepositoryInterface::class, PatientPhoneRepository::class);
        $this->app->bind(PatientSponsorRepositoryInterface::class, PatientSponsorRepository::class);
        $this->app->bind(PatientAddressRepositoryInterface::class, PatientAddressRepository::class);
        $this->app->bind(PatientPlanRepositoryInterface::class, PatientPlanRepository::class);
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
