<?php

namespace Modules\Pipeline\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Pipeline\Entities\Pipeline;
use Modules\Pipeline\Repositories\PipelineRepositoryInterface;


class PipelineRepository extends BaseRepository implements PipelineRepositoryInterface
{

    /**
     * PipelineRepository constructor.
     *
     * @param Pipeline $model
     */
    public function __construct(Pipeline $model)
    {
        $this->model = $model;
    }

}
