<?php

namespace Modules\Localization\Services;

use Modules\Localization\Transformers\StateCollection;
use Modules\Localization\Transformers\StateResource;
use Modules\Core\Services\BaseService;
use Modules\Localization\Repositories\StateRepositoryInterface;

class StateService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = StateCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = StateResource::class;

    /**
     * @param StateRepositoryInterface $repository
     */
    public function __construct(StateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
