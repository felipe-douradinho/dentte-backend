<?php

namespace Modules\Localization\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Localization\Entities\State;
use Modules\Localization\Repositories\StateRepositoryInterface;


class StateRepository extends BaseRepository implements StateRepositoryInterface
{

    /**
     * StateRepository constructor.
     *
     * @param State $model
     */
    public function __construct(State $model)
    {
        $this->model = $model;
    }

}
