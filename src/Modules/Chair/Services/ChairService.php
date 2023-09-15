<?php

namespace Modules\Chair\Services;

use Modules\Chair\Transformers\ChairResource;
use Modules\Core\Services\BaseService;
use Modules\Chair\Repositories\ChairRepositoryInterface;
use Modules\Chair\Transformers\ChairResourceCollection;

class ChairService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = ChairResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = ChairResource::class;

    /**
     * @param ChairRepositoryInterface $repository
     */
    public function __construct(ChairRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
