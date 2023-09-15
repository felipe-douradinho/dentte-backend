<?php

namespace Modules\Chair\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Chair\Entities\Chair;
use Modules\Chair\Http\Requests\ChairStoreRequest;
use Modules\Chair\Http\Requests\ChairUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Chair\Services\ChairService;


class ChairController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = ChairStoreRequest::class;
    protected string $update_request_class  = ChairUpdateRequest::class;


    /**
     * @param ChairService $service
     */
    public function __construct( ChairService $service )
    {
        $this->authorizeResource(Chair::class);
        $this->service = $service;
    }
}
