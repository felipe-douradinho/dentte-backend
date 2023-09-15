<?php

namespace Modules\Auth\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Auth\Entities\Auth;
use Modules\Auth\Repositories\AuthRepositoryInterface;


class AuthRepository extends BaseRepository implements AuthRepositoryInterface
{

    /**
     * AuthRepository constructor.
     *
     * @param Auth $model
     */
    public function __construct(Auth $model)
    {
        $this->model = $model;
    }

}
