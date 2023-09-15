<?php

namespace Modules\Product\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\ProductRepositoryInterface;


class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

    /**
     * ProductRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

}
