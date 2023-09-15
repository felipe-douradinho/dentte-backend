<?php

namespace Modules\Stock\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Stock\Entities\Stock;
use Modules\Stock\Repositories\StockRepositoryInterface;


class StockRepository extends BaseRepository implements StockRepositoryInterface
{

    /**
     * StockRepository constructor.
     *
     * @param Stock $model
     */
    public function __construct(Stock $model)
    {
        $this->model = $model;
    }

}
