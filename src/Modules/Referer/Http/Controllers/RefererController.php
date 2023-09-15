<?php

namespace Modules\Referer\Http\Controllers;

use Modules\Core\Http\Controllers\JsonController;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Referer\Http\Requests\RefererStoreRequest;
use Modules\Referer\Http\Requests\RefererUpdateRequest;
use Modules\Referer\Entities\Referer;
use Modules\Referer\Services\RefererService;


class RefererController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = RefererStoreRequest::class;
    protected string $update_request_class  = RefererUpdateRequest::class;


    /**
     * @param RefererService $service
     */
    public function __construct( RefererService $service )
    {
        $this->authorizeResource(Referer::class);
        $this->service = $service;
    }

}
