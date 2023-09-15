<?php

namespace Modules\Auth\Services;

use Modules\Auth\Transformers\AuthResource;
use Modules\Core\Services\BaseService;
use Modules\Auth\Repositories\AuthRepositoryInterface;
use Modules\Auth\Transformers\AuthResourceCollection;

class AuthService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = AuthResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = AuthResource::class;

    /**
     * @param AuthRepositoryInterface $repository
     */
    public function __construct(AuthRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
