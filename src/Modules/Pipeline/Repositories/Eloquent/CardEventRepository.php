<?php

namespace Modules\Pipeline\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Pipeline\Entities\CardEvent;
use Modules\Pipeline\Repositories\CardEventRepositoryInterface;


class CardEventRepository extends BaseRepository implements CardEventRepositoryInterface
{

    /**
     * CardEventRepository constructor.
     *
     * @param CardEvent $model
     */
    public function __construct(CardEvent $model)
    {
        $this->model = $model;
    }

}
