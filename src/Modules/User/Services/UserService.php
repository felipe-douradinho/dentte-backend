<?php

namespace Modules\User\Services;

use Modules\Core\Services\BaseService;
use Modules\User\Repositories\UserRepositoryInterface;
use Modules\User\Transformers\UserResource;
use Modules\User\Transformers\UserResourceCollection;

class UserService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = UserResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = UserResource::class;

    /**
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
