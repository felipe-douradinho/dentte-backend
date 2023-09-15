<?php

namespace Modules\Company\Services;

use Modules\Company\Transformers\CompanyResource;
use Modules\Core\Services\BaseService;
use Modules\Company\Repositories\CompanyRepositoryInterface;
use Modules\Company\Transformers\CompanyResourceCollection;

class CompanyService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CompanyResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CompanyResource::class;

    /**
     * @param CompanyRepositoryInterface $repository
     */
    public function __construct(CompanyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
