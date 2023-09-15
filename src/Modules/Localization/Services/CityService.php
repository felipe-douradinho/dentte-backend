<?php

namespace Modules\Localization\Services;

use Modules\Localization\Transformers\CityCollection;
use Modules\Localization\Transformers\CityResource;
use Modules\Core\Services\BaseService;
use Modules\Localization\Repositories\CityRepositoryInterface;

class CityService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CityCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CityResource::class;

    /**
     * @param CityRepositoryInterface $repository
     */
    public function __construct(CityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
