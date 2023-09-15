<?php

namespace Modules\Localization\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Localization\Entities\Country;
use Modules\Localization\Repositories\CountryRepositoryInterface;


class CountryRepository extends BaseRepository implements CountryRepositoryInterface
{

    /**
     * CountryRepository constructor.
     *
     * @param Country $model
     */
    public function __construct(Country $model)
    {
        $this->model = $model;
    }

}
