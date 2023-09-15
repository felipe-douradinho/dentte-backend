<?php

namespace Modules\Quote\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Quote\Entities\QuoteItem;
use Modules\Quote\Http\Requests\QuoteItemStoreRequest;
use Modules\Quote\Http\Requests\QuoteItemUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Quote\Services\QuoteItemService;


class QuoteItemController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = QuoteItemStoreRequest::class;
    protected string $update_request_class  = QuoteItemUpdateRequest::class;


    /**
     * @param QuoteItemService $service
     */
    public function __construct( QuoteItemService $service )
    {
        $this->authorizeResource(QuoteItem::class);
        $this->service = $service;
    }
}
