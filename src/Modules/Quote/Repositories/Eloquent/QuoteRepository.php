<?php

namespace Modules\Quote\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Quote\Entities\Quote;
use Modules\Quote\Repositories\QuoteRepositoryInterface;


class QuoteRepository extends BaseRepository implements QuoteRepositoryInterface
{

    /**
     * QuoteRepository constructor.
     *
     * @param Quote $model
     */
    public function __construct(Quote $model)
    {
        $this->model = $model;
    }

}
