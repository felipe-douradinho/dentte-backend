<?php

namespace Modules\Localization\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Localization\Entities\City;
use Modules\Localization\Repositories\CityRepositoryInterface;


class CityRepository extends BaseRepository implements CityRepositoryInterface
{

    /**
     * CityRepository constructor.
     *
     * @param City $model
     */
    public function __construct(City $model)
    {
        $this->model = $model;
    }

}
