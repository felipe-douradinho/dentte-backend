<?php

namespace Modules\Tooth\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Tooth\Entities\Tooth;
use Modules\Tooth\Http\Requests\ToothStoreRequest;
use Modules\Tooth\Http\Requests\ToothUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Tooth\Services\ToothService;


class ToothController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = ToothStoreRequest::class;
    protected string $update_request_class  = ToothUpdateRequest::class;


    /**
     * @param ToothService $service
     */
    public function __construct( ToothService $service )
    {
        $this->authorizeResource(Tooth::class);
        $this->service = $service;
    }
}
