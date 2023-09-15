<?php

namespace Modules\Pipeline\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Pipeline\Entities\Card;
use Modules\Pipeline\Repositories\CardRepositoryInterface;


class CardRepository extends BaseRepository implements CardRepositoryInterface
{

    /**
     * CardRepository constructor.
     *
     * @param Card $model
     */
    public function __construct(Card $model)
    {
        $this->model = $model;
    }

}
