<?php

namespace Modules\Localization\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Localization\Entities\City;
use Modules\Localization\Http\Requests\CityStoreRequest;
use Modules\Localization\Http\Requests\CityUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Localization\Services\CityService;


class CityController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = CityStoreRequest::class;
    protected string $update_request_class  = CityUpdateRequest::class;


    /**
     * @param CityService $service
     */
    public function __construct( CityService $service )
    {
        $this->authorizeResource(City::class);
        $this->service = $service;
    }
}
