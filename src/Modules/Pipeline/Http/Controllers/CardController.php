<?php

namespace Modules\Pipeline\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Pipeline\Entities\Card;
use Modules\Pipeline\Http\Requests\CardStoreRequest;
use Modules\Pipeline\Http\Requests\CardUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Pipeline\Services\CardService;


class CardController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = CardStoreRequest::class;
    protected string $update_request_class  = CardUpdateRequest::class;


    /**
     * @param CardService $service
     */
    public function __construct( CardService $service )
    {
        $this->authorizeResource(Card::class);
        $this->service = $service;
    }
}
