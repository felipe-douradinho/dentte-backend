<?php

namespace Modules\Chair\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Chair\Entities\Chair;
use Modules\Chair\Repositories\ChairRepositoryInterface;


class ChairRepository extends BaseRepository implements ChairRepositoryInterface
{

    /**
     * ChairRepository constructor.
     *
     * @param Chair $model
     */
    public function __construct(Chair $model)
    {
        $this->model = $model;
    }

}
