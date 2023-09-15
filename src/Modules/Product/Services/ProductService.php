<?php

namespace Modules\Product\Services;

use Modules\Product\Transformers\ProductResource;
use Modules\Core\Services\BaseService;
use Modules\Product\Repositories\ProductRepositoryInterface;
use Modules\Product\Transformers\ProductResourceCollection;

class ProductService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = ProductResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = ProductResource::class;

    /**
     * @param ProductRepositoryInterface $repository
     */
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
