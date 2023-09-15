<?php

namespace Modules\Base\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Base\Entities\Base;
use Modules\Base\Repositories\BaseRepositoryInterface;


class BaseRepository extends BaseRepository implements BaseRepositoryInterface
{

    /**
     * BaseRepository constructor.
     *
     * @param Base $model
     */
    public function __construct(Base $model)
    {
        $this->model = $model;
    }

}
