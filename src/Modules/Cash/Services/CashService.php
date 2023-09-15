<?php

namespace Modules\Cash\Services;

use Modules\Cash\Transformers\CashResource;
use Modules\Core\Services\BaseService;
use Modules\Cash\Repositories\CashRepositoryInterface;
use Modules\Cash\Transformers\CashResourceCollection;

class CashService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CashResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CashResource::class;

    /**
     * @param CashRepositoryInterface $repository
     */
    public function __construct(CashRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
