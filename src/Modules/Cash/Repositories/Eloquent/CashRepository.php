<?php

namespace Modules\Cash\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Cash\Entities\Cash;
use Modules\Cash\Repositories\CashRepositoryInterface;


class CashRepository extends BaseRepository implements CashRepositoryInterface
{

    /**
     * CashRepository constructor.
     *
     * @param Cash $model
     */
    public function __construct(Cash $model)
    {
        $this->model = $model;
    }

}
