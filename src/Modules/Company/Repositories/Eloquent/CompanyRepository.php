<?php

namespace Modules\Company\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Company\Entities\Company;
use Modules\Company\Repositories\CompanyRepositoryInterface;


class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{

    /**
     * CompanyRepository constructor.
     *
     * @param Company $model
     */
    public function __construct(Company $model)
    {
        $this->model = $model;
    }

}
