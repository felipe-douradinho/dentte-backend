<?php

namespace Modules\Stock\Services;

use Modules\Stock\Transformers\StockResource;
use Modules\Core\Services\BaseService;
use Modules\Stock\Repositories\StockRepositoryInterface;
use Modules\Stock\Transformers\StockResourceCollection;

class StockService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = StockResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = StockResource::class;

    /**
     * @param StockRepositoryInterface $repository
     */
    public function __construct(StockRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
