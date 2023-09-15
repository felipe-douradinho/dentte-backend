<?php

namespace Modules\Plan\Http\Controllers;

use Modules\Core\Http\Controllers\JsonController;
use Modules\Core\Traits\CheckIsDefaultTrait;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Plan\Entities\Plan;
use Modules\Plan\Http\Requests\PlanStoreRequest;
use Modules\Plan\Http\Requests\PlanUpdateRequest;
use Modules\Plan\Services\PlanService;


class PlanController extends JsonController
{
    use CustomAuthorizesRequests, CheckIsDefaultTrait;

    protected string $store_request_class   = PlanStoreRequest::class;
    protected string $update_request_class  = PlanUpdateRequest::class;


    /**
     * @param PlanService $service
     */
    public function __construct( PlanService $service )
    {
        $this->authorizeResource(Plan::class);
        $this->service = $service;
    }

}
