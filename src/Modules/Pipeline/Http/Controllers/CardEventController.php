<?php

namespace Modules\Pipeline\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Pipeline\Entities\CardEvent;
use Modules\Pipeline\Http\Requests\CardEventStoreRequest;
use Modules\Pipeline\Http\Requests\CardEventUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Pipeline\Services\CardEventService;


class CardEventController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = CardEventStoreRequest::class;
    protected string $update_request_class  = CardEventUpdateRequest::class;


    /**
     * @param CardEventService $service
     */
    public function __construct( CardEventService $service )
    {
        $this->authorizeResource(CardEvent::class);
        $this->service = $service;
    }
}
