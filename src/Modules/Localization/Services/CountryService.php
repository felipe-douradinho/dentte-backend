<?php

namespace Modules\Localization\Services;

use Modules\Localization\Transformers\CountryCollection;
use Modules\Localization\Transformers\CountryResource;
use Modules\Core\Services\BaseService;
use Modules\Localization\Repositories\CountryRepositoryInterface;

class CountryService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CountryCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CountryResource::class;

    /**
     * @param CountryRepositoryInterface $repository
     */
    public function __construct(CountryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
