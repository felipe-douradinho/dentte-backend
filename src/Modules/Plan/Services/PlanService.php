<?php

namespace Modules\Plan\Services;

use Modules\Plan\Transformers\PlanResource;
use Modules\Core\Services\BaseService;
use Modules\Plan\Repositories\PlanRepositoryInterface;
use Modules\Plan\Transformers\PlanResourceCollection;

class PlanService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = PlanResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = PlanResource::class;

    /**
     * @param PlanRepositoryInterface $repository
     */
    public function __construct(PlanRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
