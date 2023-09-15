<?php

namespace Modules\Tooth\Services;

use Modules\Tooth\Transformers\ToothResource;
use Modules\Core\Services\BaseService;
use Modules\Tooth\Repositories\ToothRepositoryInterface;
use Modules\Tooth\Transformers\ToothResourceCollection;

class ToothService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = ToothResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = ToothResource::class;

    /**
     * @param ToothRepositoryInterface $repository
     */
    public function __construct(ToothRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
