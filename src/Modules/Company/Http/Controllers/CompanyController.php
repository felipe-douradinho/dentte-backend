<?php

namespace Modules\Company\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Company\Entities\Company;
use Modules\Company\Http\Requests\CompanyStoreRequest;
use Modules\Company\Http\Requests\CompanyUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Company\Services\CompanyService;


class CompanyController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = CompanyStoreRequest::class;
    protected string $update_request_class  = CompanyUpdateRequest::class;


    /**
     * @param CompanyService $service
     */
    public function __construct( CompanyService $service )
    {
        $this->authorizeResource(Company::class);
        $this->service = $service;
    }
}
