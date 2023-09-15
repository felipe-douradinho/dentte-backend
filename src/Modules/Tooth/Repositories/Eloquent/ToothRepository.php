<?php

namespace Modules\Tooth\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Tooth\Entities\Tooth;
use Modules\Tooth\Repositories\ToothRepositoryInterface;


class ToothRepository extends BaseRepository implements ToothRepositoryInterface
{

    /**
     * ToothRepository constructor.
     *
     * @param Tooth $model
     */
    public function __construct(Tooth $model)
    {
        $this->model = $model;
    }

}
