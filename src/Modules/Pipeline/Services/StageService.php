<?php

namespace Modules\Pipeline\Services;

use Modules\Pipeline\Transformers\StageCollection;
use Modules\Pipeline\Transformers\StageResource;
use Modules\Core\Services\BaseService;
use Modules\Pipeline\Repositories\StageRepositoryInterface;

class StageService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = StageCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = StageResource::class;

    /**
     * @param StageRepositoryInterface $repository
     */
    public function __construct(StageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    //public function getDefaultFilters() : array
    //{
    //    return [ 'company_id' => auth()->user()->company_id ];
    //}
}
