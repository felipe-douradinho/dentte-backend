<?php

namespace Modules\Localization\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Localization\Entities\Country;
use Modules\Localization\Http\Requests\CountryStoreRequest;
use Modules\Localization\Http\Requests\CountryUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Localization\Services\CountryService;


class CountryController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = CountryStoreRequest::class;
    protected string $update_request_class  = CountryUpdateRequest::class;


    /**
     * @param CountryService $service
     */
    public function __construct( CountryService $service )
    {
        $this->authorizeResource(Country::class);
        $this->service = $service;
    }
}
