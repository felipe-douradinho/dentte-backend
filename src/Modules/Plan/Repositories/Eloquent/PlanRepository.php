<?php

namespace Modules\Plan\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Plan\Entities\Plan;
use Modules\Plan\Repositories\PlanRepositoryInterface;


class PlanRepository extends BaseRepository implements PlanRepositoryInterface
{

    /**
     * PlanRepository constructor.
     *
     * @param Plan $model
     */
    public function __construct(Plan $model)
    {
        $this->model = $model;
    }

}
