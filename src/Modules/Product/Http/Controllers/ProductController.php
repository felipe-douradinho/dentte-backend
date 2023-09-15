<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductStoreRequest;
use Modules\Product\Http\Requests\ProductUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Product\Services\ProductService;


class ProductController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = ProductStoreRequest::class;
    protected string $update_request_class  = ProductUpdateRequest::class;


    /**
     * @param ProductService $service
     */
    public function __construct( ProductService $service )
    {
        $this->authorizeResource(Product::class);
        $this->service = $service;
    }
}
