<?php

namespace Modules\Referer\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Referer\Entities\Referer;
use Modules\Referer\Repositories\RefererRepositoryInterface;


class RefererRepository extends BaseRepository implements RefererRepositoryInterface
{

    /**
     * RefererRepository constructor.
     *
     * @param Referer $model
     */
    public function __construct(Referer $model)
    {
        $this->model = $model;
    }

}
