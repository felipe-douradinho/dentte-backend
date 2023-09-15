<?php

namespace Modules\Referer\Services;

use Modules\Referer\Transformers\RefererResource;
use Modules\Core\Services\BaseService;
use Modules\Referer\Repositories\RefererRepositoryInterface;
use Modules\Referer\Transformers\RefererResourceCollection;

class RefererService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = RefererResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = RefererResource::class;

    /**
     * @param RefererRepositoryInterface $repository
     */
    public function __construct(RefererRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
