<?php

namespace Modules\Pipeline\Services;

use Modules\Pipeline\Transformers\PipelineResource;
use Modules\Core\Services\BaseService;
use Modules\Pipeline\Repositories\PipelineRepositoryInterface;
use Modules\Pipeline\Transformers\PipelineResourceCollection;

class PipelineService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = PipelineResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = PipelineResource::class;

    /**
     * @param PipelineRepositoryInterface $repository
     */
    public function __construct(PipelineRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
