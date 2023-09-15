<?php

namespace Modules\Quote\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Quote\Entities\QuoteItem;
use Modules\Quote\Repositories\QuoteItemRepositoryInterface;


class QuoteItemRepository extends BaseRepository implements QuoteItemRepositoryInterface
{

    /**
     * QuoteItemRepository constructor.
     *
     * @param QuoteItem $model
     */
    public function __construct(QuoteItem $model)
    {
        $this->model = $model;
    }

}
