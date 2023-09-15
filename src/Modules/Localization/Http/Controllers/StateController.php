<?php

namespace Modules\Localization\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Localization\Entities\State;
use Modules\Localization\Http\Requests\StateStoreRequest;
use Modules\Localization\Http\Requests\StateUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Localization\Services\StateService;


class StateController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = StateStoreRequest::class;
    protected string $update_request_class  = StateUpdateRequest::class;


    /**
     * @param StateService $service
     */
    public function __construct( StateService $service )
    {
        $this->authorizeResource(State::class);
        $this->service = $service;
    }
}
