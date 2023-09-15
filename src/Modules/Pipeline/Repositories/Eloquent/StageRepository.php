<?php

namespace Modules\Pipeline\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Pipeline\Entities\Stage;
use Modules\Pipeline\Repositories\StageRepositoryInterface;


class StageRepository extends BaseRepository implements StageRepositoryInterface
{

    /**
     * StageRepository constructor.
     *
     * @param Stage $model
     */
    public function __construct(Stage $model)
    {
        $this->model = $model;
    }

}
