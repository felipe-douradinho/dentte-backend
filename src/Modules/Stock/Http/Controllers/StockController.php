<?php

namespace Modules\Stock\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Stock\Entities\Stock;
use Modules\Stock\Http\Requests\StockStoreRequest;
use Modules\Stock\Http\Requests\StockUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Stock\Services\StockService;


class StockController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = StockStoreRequest::class;
    protected string $update_request_class  = StockUpdateRequest::class;


    /**
     * @param StockService $service
     */
    public function __construct( StockService $service )
    {
        $this->authorizeResource(Stock::class);
        $this->service = $service;
    }
}
