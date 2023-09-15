<?php

namespace Modules\Cash\Http\Controllers;

use Modules\Core\Traits\CheckIsDefaultTrait;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Cash\Entities\Cash;
use Modules\Cash\Http\Requests\CashStoreRequest;
use Modules\Cash\Http\Requests\CashUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Cash\Services\CashService;


class CashController extends JsonController
{
    use CustomAuthorizesRequests, CheckIsDefaultTrait;

    protected string $store_request_class   = CashStoreRequest::class;
    protected string $update_request_class  = CashUpdateRequest::class;


    /**
     * @param CashService $service
     */
    public function __construct( CashService $service )
    {
        $this->authorizeResource(Cash::class);
        $this->service = $service;
    }
}
